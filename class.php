<?php
$title = "Class";
require "header.php";
require "dbconn.php";


$sql = "SELECT * FROM contact";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$sample = $querry->fetchAll(PDO::FETCH_OBJ);

?>
<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-9 ml-4 whole-dash">
        <div class="startcard col-12">
            <h4>Class List</h4>
        </div>
        <table class="table table-striped table-light table-borderless col-10">
            <thead style="font-weight: 600;">
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Class Teacher</td>
                    <td>Streams</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <?php foreach ($sample as $samp) : ?>
                <p>Name <?= $samp->name; ?></p>
                <p>Email <?= $samp->email; ?></p>
                <!-- <p>Contact <?= $samp->contact; ?></p> -->
                <p>Message: <?= $samp->message; ?></p>
            <?php endforeach ?>
            <tr>
                <td>1</td>
                <td>Form One</td>
                <td>Mrs. Rossete</td>
                <td>3</td>
                <td><a href="#" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                <td><a href="#" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Form One</td>
                <td>Mrs. Rossete</td>
                <td>2</td>
                <td><a href="#" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                <td><a href="#" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Form One</td>
                <td>Mrs. Rossete</td>
                <td>3</td>
                <td><a href="#" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                <td><a href="#" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Form One</td>
                <td>Mrs. Rossete</td>
                <td>2</td>
                <td><a href="#" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                <td><a href="#" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Form One</td>
                <td>Mrs. Rossete</td>
                <td>3</td>
                <td><a href="#" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                <td><a href="#" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Form One</td>
                <td>Mrs. Rossete</td>
                <td>2</td>
                <td><a href="#" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                <td><a href="#" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
        </table>
    </div>
</div>