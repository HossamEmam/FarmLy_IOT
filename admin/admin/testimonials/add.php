<?php

include("classes/admin.php");

$admin = new admin();

if (isset($_POST['add'])) {


    $admin->obj->all_data->testimonials->set_name($_POST['name']);
    $admin->obj->all_data->testimonials->set_desc($_POST['desc']);
    $admin->obj->all_data->testimonials->set_job($_POST['job']);

    $insert = $admin->add_testimonials();

    if ($insert) {
        echo ' <div class="alert alert-success"><strong>Well done!</strong> You successfully Added Testimonial.</div>  ';
    }


}


?>

<div class="panel panel-primary">


    <div class="panel-heading">
        <div class="panel-title" style="font-size:large;font-family: cursive;">Add Testimonial
        </div>


    </div>


    <div class="panel-body">
        <form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="field-1" placeholder="Name " name="name"
                           value="<?php if (isset($_POST['name'])) {
                               echo $_POST['name'];
                           } ?>" required="required">
                </div>
                <label for="field-1" class="col-sm-2 control-label">Job</label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="field-1" placeholder="Job" name="job"
                           value="<?php if (isset($_POST['job'])) {
                               echo $_POST['job'];
                           } ?>" required="required">
                </div>
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label">Description</label>

                <div class="col-sm-10">
                    <textarea class="form-control autogrow" id="field-ta"
                              placeholder="I will grow as you type new lines."
                              style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 40%; margin-left: 0px; margin-right: -0.09375px; width: 100%;"
                              name="desc"><?php if(isset($_POST['desc'])){echo $_POST['desc'];} ?></textarea>
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
                    <input type="submit" name="add" class="btn btn-primary " value="Add Testimonial"
                        />
                </div>
            </div>
        </form>


    </div>
</div>



