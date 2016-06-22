<?php

include("classes/admin.php");

$admin = new admin();

if (isset($_POST['add'])) {


    $admin->obj->all_data->service->set_title1($_POST['Title1']);
    $admin->obj->all_data->service->set_desc($_POST['desc']);
    $admin->obj->all_data->service->set_icon($_POST['icon']);

    $insert = $admin->add_service();

    if ($insert) {
        echo ' <div class="alert alert-success"><strong>Well done!</strong> You successfully Added Service.</div>  ';
    }


}


?>

<div class="panel panel-primary">


    <div class="panel-heading">
        <div class="panel-title" style="font-size:large;font-family: cursive;">Add Service
        </div>


    </div>


    <div class="panel-body">
        <form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label">Icon Type</label>

                <div class="col-sm-10">
                    <select class="form-control" id="SELECTOR" name="icon" required="required">

                        <option value="users">Users</option>
                        <option value="database">Database</option>
                        <option value="desktop">Desktop</option>
                        <option value="coffee">Coffee</option>
                        <option value="car">Car</option>
                        <option value="cog">Cog</option>
                        <option value="cube">Cube</option>
                        <option value="paper-plane-o">Papers</option>
                        <option value="life-saver">Life Saver</option>

                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label">Title</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="field-1" placeholder="Title" name="Title1"
                           value="<?php if (isset($_POST['Title1'])) {
                               echo $_POST['Title1'];
                           } ?>" required="required">
                </div>

            </div>


            <div class="form-group">
                <label for="field-ta" class="col-sm-2 control-label">Description Content</label>

                <div class="col-sm-10">
                    <textarea class="form-control autogrow" id="field-ta"
                              placeholder="I will grow as you type new lines."
                              style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 48px;" name="desc"><?php if (isset($_POST['Title1'])) {
                            echo $_POST['desc'];
                        } ?></textarea>
                </div>
            </div>


            <div class="form-group">
                <label for="field-1" class="col-sm-10 control-label"></label>

                <div class="col-sm-2">
                    <input type="submit" name="add" class="btn btn-primary " value="Add Service"
                        />
                </div>
            </div>
        </form>


    </div>
</div>



