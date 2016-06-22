<?php


class our_service
{
    private $id;
    private $icon;
    private $title1;
    private $desc;

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

    public function get_icon()
    {
        return $this->icon;
    }

    public function set_icon($icon){
        $this->icon=$icon;

    }

    public function set_id($id)
    {
        $this->id = $id;

    }

    public function get_id()
    {
        return $this->id;
    }


}

?>