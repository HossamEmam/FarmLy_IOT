<?php


class Client
{
    private $id;
    private $image;





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