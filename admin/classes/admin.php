<?php
include("db_manager.php");

class admin
{
    public $obj = '';

    function __construct()
    {
        $this->obj = new db_manager();

    }


    //Start Slider------------------------------------------------------------------------

    public function add_slider()
    {

        $cols = "`title1`,`title2`,`title3`,`image`";

        $this->obj->all_data->slider->set_image($this->upload("slider"));
        $value =
            "'" . $this->obj->all_data->slider->get_title1() . "',
                  '" . $this->obj->all_data->slider->get_title2() . "',
                  '" . $this->obj->all_data->slider->get_title3() . "',
                  '" . $this->obj->all_data->slider->get_image() . "'

                   ";


        $insert = $this->obj->insert("slider", $cols, $value);
        return $insert;
    }

    public function view_slider($left, $right)
    {
        $select = $this->obj->select("slider", $left, $right);
        return $select;
    }

    public function edit_slider($right, $check_for_image)
    {
        if ($check_for_image == "image_not_changed") {

            $set = "
                    `title1`='" . $this->obj->all_data->slider->get_title3() . "',
                    `title2`='" . $this->obj->all_data->slider->get_title2() . "',
                    `title3`='" . $this->obj->all_data->slider->get_title3() . "'
                    ";

            $update = $this->obj->Update("slider", $set, "id", $right);
            return $update;


        } else {
            $select = $this->obj->select("slider", "id", $right);
            unlink('admin/slider/images/' . $select['image']);

            $this->obj->all_data->slider->set_image($this->upload("slider"));
            $set = "
                    `title1`='" . $this->obj->all_data->slider->get_title3() . "',
                    `title2`='" . $this->obj->all_data->slider->get_title2() . "',
                    `title3`='" . $this->obj->all_data->slider->get_title3() . "',
                     `image`='" . $this->obj->all_data->slider->get_image() . "'
                ";


            $update = $this->obj->Update("slider", $set, "id", $right);
            return $update;

        }
    }

    public function delete_slider()
    {
        $id = "'" . $this->obj->all_data->slider->get_id() . "'";
        $select = $this->obj->select("slider", "id", $id);
        unlink('admin/slider/images/' . $select['image']);
        $delete = $this->obj->delete("slider", "id", $id);
        return $delete;
    }
    //End Slider------------------------------------------------------------------------------

    //Start about_us-------------------------------------------------------------------------

    public function about_us($right, $check_for_image)
    {
        if ($check_for_image == "image_not_changed") {

            $set = "
                    `title1`='" . $this->obj->all_data->about_us->get_title1() . "',
                    `desc`='" . $this->obj->all_data->about_us->get_desc() . "'

                    ";

            $update = $this->obj->Update("about_us", $set, "id", $right);
            return $update;


        } else {
            $select = $this->obj->select("about_us", "id", $right);
            unlink('admin/about_us/images/' . $select['image']);

            $this->obj->all_data->about_us->set_image($this->upload("about_us"));
            $set = "
                    `title1`='" . $this->obj->all_data->about_us->get_title1() . "',
                      `desc`='" . $this->obj->all_data->about_us->get_desc() . "',
                     `image`='" . $this->obj->all_data->about_us->get_image() . "'
                ";


            $update = $this->obj->Update("about_us", $set, "id", $right);
            return $update;

        }

    }

    public function view_about_us($left, $right)
    {
        $select = $this->obj->select("about_us", $left, $right);
        return $select;
    }

    //End about_us---------------------------------------------------------------------------

//Start service------------------------------------------------------------------------

    public function add_service()
    {

        $cols = "`title`,`icon`,`desc`";

        $value =
            "'" . $this->obj->all_data->service->get_title1() . "',
                  '" . $this->obj->all_data->service->get_icon() . "',
                  '" . $this->obj->all_data->service->get_desc() . "'

                   ";


        $insert = $this->obj->insert("out_service", $cols, $value);
        return $insert;
    }

    public function view_service($left, $right)
    {
        $select = $this->obj->select("out_service", $left, $right);
        return $select;
    }

    public function edit_service($right)
    {


        $set = "
                `title`='" . $this->obj->all_data->service->get_title1() . "',
                `icon`='" . $this->obj->all_data->service->get_icon() . "',
                `desc`='" . $this->obj->all_data->service->get_desc() . "'
                ";

        $update = $this->obj->Update("out_service", $set, "id", $right);
        return $update;

    }

    public function delete_service()
    {
        $id = "'" . $this->obj->all_data->service->get_id() . "'";

        $delete = $this->obj->delete("out_service", "id", $id);
        return $delete;
    }
    //End service------------------------------------------------------------------------------

    //Start client------------------------------------------------------------------------

    public function add_client()
    {

        $cols = "`image`";

        $this->obj->all_data->Client->set_image($this->upload("clients"));
        $value =
            "'" . $this->obj->all_data->Client->get_image() . "'";


        $insert = $this->obj->insert("client", $cols, $value);
        return $insert;
    }

    public function view_client($left, $right)
    {
        $select = $this->obj->select("client", $left, $right);
        return $select;
    }

    public function edit_client($right, $check_for_image)
    {
        if ($check_for_image == "image_not_changed") {

            $set = "";

            $update = $this->obj->Update("client", $set, "id", $right);
            return $update;


        } else {
            $select = $this->obj->select("client", "id", $right);
            unlink('admin/clients/images/' . $select['image']);

            $this->obj->all_data->Client->set_image($this->upload("clients"));
            $set = "

                     `image`='" . $this->obj->all_data->Client->get_image() . "'
                ";


            $update = $this->obj->Update("client", $set, "id", $right);
            return $update;

        }
    }

    public function delete_client()
    {
        $id = "'" . $this->obj->all_data->Client->get_id() . "'";
        $select = $this->obj->select("client", "id", $id);
        unlink('admin/clients/images/' . $select['image']);
        $delete = $this->obj->delete("client", "id", $id);
        return $delete;
    }
    //End client------------------------------------------------------------------------------

    //Start Slider------------------------------------------------------------------------

    public function add_testimonials()
    {

        $cols = "`desc`,`name`,`job`,`image`";

        $this->obj->all_data->testimonials->set_image($this->upload("testimonials"));
        $value =
            "'" . $this->obj->all_data->testimonials->get_desc() . "',
                  '" . $this->obj->all_data->testimonials->get_name() . "',
                  '" . $this->obj->all_data->testimonials->get_job() . "',
                  '" . $this->obj->all_data->testimonials->get_image() . "'

                   ";


        $insert = $this->obj->insert("testimonials", $cols, $value);
        return $insert;
    }

    public function view_testimonials($left, $right)
    {
        $select = $this->obj->select("testimonials", $left, $right);
        return $select;
    }

    public function edit_testimonials($right, $check_for_image)
    {
        if ($check_for_image == "image_not_changed") {

            $set = "
                    `job`='" . $this->obj->all_data->testimonials->get_job() . "',
                    `name`='" . $this->obj->all_data->testimonials->get_name() . "',
                    `desc`='" . $this->obj->all_data->testimonials->get_desc() . "'
                    ";

            $update = $this->obj->Update("testimonials", $set, "id", $right);
            return $update;


        } else {
            $select = $this->obj->select("testimonials", "id", $right);
            unlink('admin/testimonials/images/' . $select['image']);

            $this->obj->all_data->testimonials->set_image($this->upload("testimonials"));
            $set = "
                    `desc`='" . $this->obj->all_data->testimonials->get_desc() . "',
                    `name`='" . $this->obj->all_data->testimonials->get_name() . "',
                    `job`='" . $this->obj->all_data->testimonials->get_job() . "',
                     `image`='" . $this->obj->all_data->testimonials->get_image() . "'
                ";


            $update = $this->obj->Update("testimonials", $set, "id", $right);
            return $update;

        }
    }

    public function delete_testimonials()
    {
        $id = "'" . $this->obj->all_data->testimonials->get_id() . "'";
        $select = $this->obj->select("testimonials", "id", $id);
        unlink('admin/testimonials/images/' . $select['image']);
        $delete = $this->obj->delete("testimonials", "id", $id);
        return $delete;
    }
    //End Slider------------------------------------------------------------------------------

    //Start notes------------------------------------------------------------------------

    public function add_note()
    {

        $cols = "`desc`";

        $value =
            " '" . $this->obj->all_data->notes->get_desc() . "' ";


        $insert = $this->obj->insert("notes", $cols, $value);
        return $insert;
    }

    public function view_note($left, $right)
    {
        $select = $this->obj->select("notes", $left, $right);
        return $select;
    }

    public function edit_note($right)
    {


        $set = "

                `desc`='" . $this->obj->all_data->notes->get_desc() . "'
                ";

        $update = $this->obj->Update("notes", $set, "id", $right);
        return $update;

    }

    public function delete_note()
    {
        $id = "'" . $this->obj->all_data->notes->get_id() . "'";

        $delete = $this->obj->delete("notes", "id", $id);
        return $delete;
    }
    //End note------------------------------------------------------------------------------

    // Uplaod--------------------------------------------------------------------------------
    public function upload($file)
    {
        $path = dirname(__FILE__) . "/../admin/" . $file . "/images/";

        $tmp = $_FILES['upload']['tmp_name'];
        $name = $_FILES['upload']['name'];


        $chr = "QWERRTYUIOPLKJHGFDSAZXCVBNMqwertyuioplkjhgfdsazxcvbnm1234567890";

        $result = "";


        for ($i = 1; $i <= 5; $i++) {


            $result .= $chr[mt_rand(0, 30)];


        }


        $cut = explode('.', $name);

        $newname = $cut[0] . "_" . $result . "." . $cut[1];


        move_uploaded_file($tmp, $path . $newname);

        return $newname;
    }

}

?>