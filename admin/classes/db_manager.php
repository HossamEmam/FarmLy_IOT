<?php
include("all_data.php");

class db_manager extends all_data
{

    public $con;
    public $all_data;
    //connect
    function __construct()
    {
        $this->all_data=new all_data();
        $this->con = mysqli_connect("us-cdbr-azure-west-c.cloudapp.net", "bb915548fc83e4", "74208deb", "gp_farmly");
    }



    //insert
    public function insert($table, $cols, $values)
    {

        $insert = mysqli_query($this->con, " INSERT INTO $table ($cols) VALUES($values)");
        return $insert;
    }

    //select
    public function select($table, $left, $right)
    {
        $rows = array();
        if ($left == "" or $right == "") {
            $select = mysqli_query($this->con, "SELECT * from $table ");
            if ($select == "")
                return $select;
            else {
                while ($row = $select->fetch_array()) {

                    $rows[] = $row;
                }
                return $rows;
            }





        } else {
            $select = mysqli_query($this->con, " SELECT * from $table where $left=$right");
            $row = $select->fetch_array();
            return $row;
        }
    }

    //update

    public function Update($table, $set, $left, $right)
    {
        if ($left == "" or $right == "") {

            $update = mysqli_query($this->con, "UPDATE $table SET $set  ");
            return $update;

        } else {
            $update = mysqli_query($this->con, "UPDATE $table SET $set  WHERE $left=$right ");
            return $update;

        }
    }


    //delete

    public function delete($table, $left, $right)
    {
        if ($left == "" or $right == "") {

            $delete = mysqli_query($this->con, "DELETE FROM $table ");
            return $delete;

        } else {
            $delete = mysqli_query($this->con, "DELETE FROM $table WHERE $left=$right ");
            return $delete;
        }

    }


    function simple_crypt($string, $action)
    {
        $res = '';
        $key = "d0a7e7123sdf3245997b6d5fcd55f4b5c32611b87cd923e8883,dfjskldjfklsjdflksjdfljsdlfjksldjfklsdjfkmdn7b63bf2941ef819dc8ca282";
        if ($action !== 'encrypt') {
            $string = base64_decode($string);
        }
        for ($i = 0; $i < strlen($string); $i++) {
            $c = ord(substr($string, $i));
            if ($action == 'encrypt') {
                $c += ord(substr($key, (($i + 10) % strlen($key))));
                $res .= chr($c & 0xFF);
            } else {
                $c -= ord(substr($key, (($i + 10) % strlen($key))));
                $res .= chr(abs($c) & 0xFF);
            }
        }
        if ($action == 'encrypt') {
            $res = base64_encode($res);
        }

        return $res;
    }



}

?>