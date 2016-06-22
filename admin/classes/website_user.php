<?php
include("db_manager.php");

class website
{
    public $obj = '';

    function __construct()
    {
        $this->obj = new db_manager();

    }


    //Start slider------------------------------------------------------------------------

    public function view_slider($left, $right)
    {
        $select = $this->obj->select("slider", $left, $right);
        return $select;
    }

    public function view_service($left, $right)
    {
        $select = $this->obj->select("out_service", $left, $right);
        return $select;
    }

    public function view_clients($left, $right)
    {
        $select = $this->obj->select("client", $left, $right);
        return $select;
    }

    public function view_about_us($left, $right)
    {
        $select = $this->obj->select("about_us", $left, $right);
        return $select;
    }

    public function view_testimonials($left, $right)
    {
        $select = $this->obj->select("testimonials", $left, $right);
        return $select;
    }

    public function view_comment($left, $right)
    {
        $select = $this->obj->select("notes", "id", "1");
        return $select;
    }
}

?>