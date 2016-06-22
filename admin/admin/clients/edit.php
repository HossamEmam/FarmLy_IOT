<?php

include("classes/admin.php");

$admin = new admin();
$id = $admin->obj->simple_crypt($_GET['editclient'], "encrypts");


$l = "`id`";
$r = "'" . $id . "'";


if (isset($_POST['edit'])) {

    if ($_FILES['upload']['name'] == "") {
        $check = "image_not_changed";

    } else {
        $check = "image_changed";
    }

    $admin->obj->all_data->slider->set_id($id);
    $update = $admin->edit_client($r, $check);

    if ($update) {
        echo ' <div class="alert alert-success"><strong>Well done!</strong> You successfully Updated Client!!</div>  ';
    }


}


$data = $admin->view_client($l, $r);

?>


<div class="panel panel-primary">


    <div class="panel-heading">
        <div class="panel-title" style="font-size:large;
    font-family: cursive;">Edit Client
        </div>


    </div>


    <div class="panel-body">
        <form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data">



            <div class="form-group">
                <label class="col-sm-2 control-label">Image Upload</label>

                <div class="col-sm-9">

                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;"
                             data-trigger="fileinput">
                            <img src="admin/clients/images/<?php echo $data['image']; ?>"
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
                    <input type="submit" name="edit" class="btn btn-primary " value="Edit Client"
                        />
                </div>
            </div>
        </form>


    </div>
</div>




