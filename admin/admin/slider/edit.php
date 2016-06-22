<?php

include("classes/admin.php");

$admin = new admin();
$id = $admin->obj->simple_crypt($_GET['editslider'], "encrypts");


$l = "`id`";
$r = "'" . $id . "'";


if (isset($_POST['edit'])) {

    if ($_FILES['upload']['name'] == "") {
        $check = "image_not_changed";

    } else {
        $check = "image_changed";
    }
    $admin->obj->all_data->slider->set_title1($_POST['Title1']);
    $admin->obj->all_data->slider->set_title2($_POST['Title2']);
    $admin->obj->all_data->slider->set_title3($_POST['Title3']);
    $admin->obj->all_data->slider->set_id($id);
    $update = $admin->edit_slider($r, $check);

    if ($update) {
        echo ' <div class="alert alert-success"><strong>Well done!</strong> You successfully Updated Slider!!</div>  ';
    }


}


$data = $admin->view_slider($l, $r);

?>


<div class="panel panel-primary">


    <div class="panel-heading">
        <div class="panel-title" style="font-size:large;
    font-family: cursive;">Edit Slider
        </div>


    </div>


    <div class="panel-body">
        <form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label">Title 1</label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="field-1" placeholder="Title 1" name="Title1"
                           value="<?php echo $data['title1']; ?>" required="required">
                </div>
                <label for="field-1" class="col-sm-2 control-label">Title 2</label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="field-1" placeholder="Title 2" name="Title2"
                           value="<?php echo $data['title2']; ?>" required="required">
                </div>
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label">Title 3</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="field-1" placeholder="Title 3" name="Title3"
                           value="<?php echo $data['title3']; ?>" required="required">
                </div>

            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Image Upload</label>

                <div class="col-sm-9">

                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;"
                             data-trigger="fileinput">
                            <img src="admin/slider/images/<?php echo $data['image']; ?>"
                                 alt="">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"
                             style="max-width: 200px; max-height: 150px"></div>
                        <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="upload" >
                                                </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-10 control-label"></label>

                <div class="col-sm-2">
                    <input type="submit" name="edit" class="btn btn-primary " value="Edit Slider"
                        />
                </div>
            </div>
        </form>


    </div>
</div>




