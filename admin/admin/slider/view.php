<?php
include("classes/admin.php");
$cat = new admin();




//delete{---------------------------------------------------------------------------------------------------------------------------
if (isset($_POST['delete'])) {
    $cat->obj->all_data->slider->set_id($cat->obj->simple_crypt($_POST['id'], "encrypts"));
    $delete = $cat->delete_slider();
    if ($delete) {
        $_SESSION['success'] = '<div class="alert alert-success"><strong>Well done!</strong>
                                You successfully Deleted Slider (' . $cat->obj->all_data->slider->get_id() . ')</div>';

    }

    if ($_SESSION['success'] != null)
        echo $_SESSION['success'];
}

//}{---------------------------------------------------------------------------------------------------------------------------------
?>
<div class="panel panel-primary">


    <div class="panel-heading">
        <div class="panel-title" style="font-size:large;
    font-family: cursive;">View Sliders
        </div>


    </div>


    <div class="panel-body">

        <table class="table table-bordered datatable" id="table-3">
            <thead>
            <tr class="replace-inputs">
                <th>ID</th>
                <th>Title 1</th>
                <th>Title 2</th>
                <th>Title 3</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Title 1</th>
                <th>Title 2</th>
                <th>Title 3</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>


            <?php


            $cat2 = $cat->view_slider("", "");
            foreach ($cat2 as $Category) {

                $id = $cat->obj->simple_crypt($Category['id'], "encrypt");

                ?>


                <tr class='odd gradeX'>
                    <td class='center' style='max-width:100px !important'> <?php echo $Category['id']; ?></td>
                    <td> <?php echo $Category['title1']; ?></td>
                    <td> <?php echo $Category['title2']; ?></td>
                    <td> <?php echo $Category['title3']; ?></td>
                    <td><img style='width:200px;  height:150px'
                             src='admin/slider/images/<?php echo $Category['image']; ?>'/></td>


                    <td align="center">

                        <div class="btn-group">
                            <button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-blue" role="menu" style="    margin-left: -118%;">
                                <li><a href="main.php?editslider=<?php echo $id; ?>"
                                       class="">
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <form role="form" class="" method="post"
                                              enctype="multipart/form-data">

                                            <input type="hidden" value="<?php echo $id; ?>" name="id">

                                            <button type="submit" class="btn-blue" name="delete"
                                                    style="width: 114%;margin-left: -7%;border: 0">
                                                Delete
                                            </button>

                                        </form>

                                    </a>
                                </li>

                            </ul>
                        </div>


                    </td>

                </tr>

                <?php

            } ?>
            </tbody>


        </table>

    </div>
</div>


<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var
            table = $("#table-3").dataTable({
                "sPaginationType": "bootstrap",
                "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "bStateSave": true
            });

        table.columnFilter({
            "sPlaceHolder": "head:after"
        });
    });
</script>

