<?php

include("classes/admin.php");

$admin = new admin();

if (isset($_POST['add'])) {


    $admin->obj->all_data->slider->set_title1($_POST['Title1']);
    $admin->obj->all_data->slider->set_title2($_POST['Title2']);
    $admin->obj->all_data->slider->set_title3($_POST['Title3']);

    $insert = $admin->add_slider();

    if ($insert) {
        echo ' <div class="alert alert-success"><strong>Well done!</strong> You successfully Added Slider.</div>  ';
    }


}


?>

<div class="panel panel-primary">


    <div class="panel-heading">
        <div class="panel-title" style="font-size:large;font-family: cursive;">Add Slider
        </div>


    </div>


    <div class="panel-body">
        <form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label">Title 1</label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="field-1" placeholder="Title 1" name="Title1"
                           value="<?php if (isset($_POST['Title1'])) {
                               echo $_POST['Title1'];
                           } ?>" required="required">
                </div>
                <label for="field-1" class="col-sm-2 control-label">Title 2</label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="field-1" placeholder="Title 2" name="Title2"
                           value="<?php if (isset($_POST['Title2'])) {
                               echo $_POST['Title2'];
                           } ?>" required="required">
                </div>
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label">Title 3</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="field-1" placeholder="Title 3" name="Title3"
                           value="<?php if (isset($_POST['Title3'])) {
                               echo $_POST['Title3'];
                           } ?>" required="required">
                </div>

            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Image Upload</label>

                <div class="col-sm-9">

                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;"
                             data-trigger="fileinput">
                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                 alt="">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"
                             style="max-width: 200px; max-height: 150px"></div>
                        <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="upload" required="required">
                                                </span>
                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-10 control-label"></label>

                <div class="col-sm-2">
                    <input type="submit" name="add" class="btn btn-primary " value="Add Slider"
                        />
                </div>
            </div>
        </form>


    </div>
</div>



