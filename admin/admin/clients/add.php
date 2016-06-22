<?php

include("classes/admin.php");

$admin = new admin();

if (isset($_POST['add'])) {




    $insert = $admin->add_client();

    if ($insert) {
        echo ' <div class="alert alert-success"><strong>Well done!</strong> You successfully Added Client.</div>  ';
    }


}


?>

<div class="panel panel-primary">


    <div class="panel-heading">
        <div class="panel-title" style="font-size:large;font-family: cursive;">Add Client
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
                    <input type="submit" name="add" class="btn btn-primary " value="Add Client"
                        />
                </div>
            </div>
        </form>


    </div>
</div>



