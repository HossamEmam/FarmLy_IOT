<?php


class notes
{
    private $id;

    private $desc;



    public function get_desc()
    {
        return $this->desc;
    }

    public function set_desc($desc){
        $this->desc=$desc;

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