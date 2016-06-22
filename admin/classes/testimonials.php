<?php


class testimonials
{
    private $id;
    private $desc;
    private $job;
    private $name;
    private $image;


    public function get_name()
    {
        return $this->name;
    }

    public function set_name($name){
        $this->name=$name;

    }


    public function get_desc()
    {
        return $this->desc;
    }

    public function set_desc($desc){
        $this->desc=$desc;

    }

    public function get_job()
    {
        return $this->job;
    }

    public function set_job($job){
        $this->job=$job;

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