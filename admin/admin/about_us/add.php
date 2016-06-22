<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script type="text/javascript">
    function get_page(sel) {
        window.location = "main.php?about_us&type=" + sel.value;
    }
</script>
<?php

include("classes/admin.php");

$admin = new admin();

if (isset($_POST['add'])) {


    if ($_FILES['upload']['name'] == "") {
        $check = "image_not_changed";

    } else {
        $check = "image_changed";
    }

    if ($_GET['type'] == 1)
        $admin->obj->all_data->about_us->set_title1($_POST['Title1']);

    $admin->obj->all_data->about_us->set_desc($_POST['desc']);

    $insert = $admin->about_us($_GET['type'], $check);

    if ($insert) {
        echo ' <div class="alert alert-success"><strong>Well done!</strong> You successfully Added Slider.</div>  ';
    }


}
if (isset($_GET['type']))
    $data = $admin->view_about_us("id", $_GET['type']);
?>

<div class="panel panel-primary">


    <div class="panel-heading">
        <div class="panel-title" style="font-size:large;font-family: cursive;">About US
        </div>


    </div>


    <div class="panel-body">
        <form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label">Type</label>

                <div class="col-sm-10">
                    <select class="form-control" id="SELECTOR" onChange="get_page(this);" name="kind">

                        <option value="">Type</option>
                        <option value="1">About US</option>
                        <option value="2">Who We Are</option>
                        <option value="3">What We Do</option>
                        <option value="4">Our Mission</option>

                    </select>
                </div>
            </div>


            <?php if (isset($_GET['type'])) {
                if ($_GET['type'] == 1) {
                    ?>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-2 control-label">Title 1</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="field-1" placeholder="Title 1" name="Title1"
                                   value="<?php if (isset($_GET['type'])) {
                                       echo $data['title1'];
                                   } ?>" required="required">
                        </div>

                    </div>
                <?php } ?>

                <div class="form-group">
                    <label for="field-ta" class="col-sm-2 control-label">Description Content</label>

                    <div class="col-sm-10">
                        <textarea class="form-control autogrow" id="field-ta"
                                  placeholder="I will grow as you type new lines."
                                  style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 40%; margin-left: 0px; margin-right: -0.09375px; width: 100%;"
                                  name="desc"><?php if (isset($_GET['type'])){echo $data['desc'];}?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Image Upload</label>

                    <div class="col-sm-9">

                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;"
                                 data-trigger="fileinput">
                                <img src="admin/about_us/images/<?php if (isset($_GET['type'])) {
                                    echo $data['image'];
                                } ?>"
                                     alt="">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"
                                 style="max-width: 200px; max-height: 150px"></div>
                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="upload">
                                                </span>
                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <label for="field-1" class="col-sm-10 control-label"></label>

                    <div class="col-sm-2">
                        <input type="submit" name="add" class="btn btn-primary " value="About US"
                            />
                    </div>
                </div>
            <?php } ?>
        </form>


    </div>
</div>



