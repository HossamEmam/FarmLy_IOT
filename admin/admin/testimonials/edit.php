<?php

include("classes/admin.php");

$admin = new admin();
$id = $admin->obj->simple_crypt($_GET['edittestimonial'], "encrypts");


$l = "`id`";
$r = "'" . $id . "'";


if (isset($_POST['edit'])) {

    if ($_FILES['upload']['name'] == "") {
        $check = "image_not_changed";

    } else {
        $check = "image_changed";
    }
    $admin->obj->all_data->testimonials->set_desc($_POST['desc']);
    $admin->obj->all_data->testimonials->set_name($_POST['name']);
    $admin->obj->all_data->testimonials->set_job($_POST['job']);
    $admin->obj->all_data->testimonials->set_id($id);
    $update = $admin->edit_testimonials($r, $check);

    if ($update) {
        echo ' <div class="alert alert-success"><strong>Well done!</strong> You successfully Updated Testimonials!!</div>  ';
    }


}


$data = $admin->view_testimonials($l, $r);

?>


<div class="panel panel-primary">


    <div class="panel-heading">
        <div class="panel-title" style="font-size:large;
    font-family: cursive;">Edit Testimonials
        </div>


    </div>


    <div class="panel-body">
        <form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="field-1" placeholder="Name" name="name"
                           value="<?php echo $data['name']; ?>" required="required">
                </div>
                <label for="field-1" class="col-sm-2 control-label">Job</label>

                <div class="col-sm-4">
                    <input type="text" class="form-control" id="field-1" placeholder="Job" name="job"
                           value="<?php echo $data['job']; ?>" required="required">
                </div>
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label">Description</label>

                <div class="col-sm-10">
                    <textarea class="form-control autogrow" id="field-ta"
                              placeholder="I will grow as you type new lines."
                              style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 40%; margin-left: 0px; margin-right: -0.09375px; width: 100%;"
                              name="desc"><?php echo $data['desc'];  ?>
                    </textarea>
                </div>

            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Image Upload</label>

                <div class="col-sm-9">

                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;"
                             data-trigger="fileinput">
                            <img src="admin/testimonials/images/<?php echo $data['image']; ?>"
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
                    <input type="submit" name="edit" class="btn btn-primary " value="Edit Testimonials"
                        />
                </div>
            </div>
        </form>


    </div>
</div>




