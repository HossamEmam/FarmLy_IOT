<?php

include("classes/admin.php");

$admin = new admin();
$id = 1;


$l = "`id`";
$r = "'" . $id . "'";


if (isset($_POST['edit'])) {


    $admin->obj->all_data->notes->set_desc($_POST['desc']);

    $update = $admin->edit_note($r);

    if ($update) {
        echo ' <div class="alert alert-success"><strong>Well done!</strong> You successfully Updated Note!!</div>  ';
    }


}


$data = $admin->view_note($l, $r);

?>


<div class="panel panel-primary">


    <div class="panel-heading">
        <div class="panel-title" style="font-size:large;
    font-family: cursive;">Edit Note
        </div>


    </div>


    <div class="panel-body">
        <form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data">





            <div class="form-group">
                <label for="field-ta" class="col-sm-2 control-label">Description Content</label>

                <div class="col-sm-10">
                    <textarea class="form-control autogrow" id="field-ta"
                              placeholder="I will grow as you type new lines."
                              style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 48px;"
                              name="desc"><?php echo $data['desc'];?></textarea>
                </div>
            </div>


            <div class="form-group">
                <label for="field-1" class="col-sm-10 control-label"></label>

                <div class="col-sm-2">
                    <input type="submit" name="edit" class="btn btn-primary " value="Edit Note"
                        />
                </div>
            </div>
        </form>


    </div>
</div>




