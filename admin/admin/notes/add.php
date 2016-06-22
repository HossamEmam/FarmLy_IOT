<?php

include("classes/admin.php");

$admin = new admin();

if (isset($_POST['add'])) {


    $admin->obj->all_data->notes->set_desc($_POST['desc']);

    $insert = $admin->add_note();

    if ($insert) {
        echo ' <div class="alert alert-success"><strong>Well done!</strong> You successfully Added Note.</div>  ';
    }


}


?>

<div class="panel panel-primary">


    <div class="panel-heading">
        <div class="panel-title" style="font-size:large;font-family: cursive;">Add Note
        </div>


    </div>


    <div class="panel-body">
        <form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data">






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
                    <input type="submit" name="add" class="btn btn-primary " value="Add Note"
                        />
                </div>
            </div>
        </form>


    </div>
</div>



