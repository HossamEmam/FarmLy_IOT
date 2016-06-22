<?php


class about_us
{
    private $id;
    private $title1;
    private $desc;
    private $image;


    public function get_title1()
    {
        return $this->title1;
    }

    public function set_title1($title1){
        $this->title1=$title1;

    }


    public function get_desc()
    {
        return $this->desc;
    }

    public function set_desc($desc){
        $this->desc=$desc;

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