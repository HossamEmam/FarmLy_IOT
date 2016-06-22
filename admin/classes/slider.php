<?php


class slider
{
    private $id;
    private $title1;
    private $title2;
    private $title3;
    private $image;


    public function get_title1()
    {
        return $this->title1;
    }

    public function set_title1($title1){
        $this->title1=$title1;

    }


    public function get_title2()
    {
        return $this->title2;
    }

    public function set_title2($title2){
        $this->title2=$title2;

    }


    public function get_title3()
    {
        return $this->title3;
    }

    public function set_title3($title3){
        $this->title3=$title3;

    }


    public function get_image()
    {
        return $this->image;
    }

    public function set_image($image){
        $this->image=$image;

    }

    public function set_id($id){
        $this->id=$id;

    }

    public function get_id()
    {
        return $this->id;
    }




}

?>