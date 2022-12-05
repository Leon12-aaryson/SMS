<?php
$title = "Admin Dashboard";
require "header.php";
require "dbconn.php";

// for students table
$sql = "SELECT * FROM admission";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$admit = $querry->fetchAll(PDO::FETCH_OBJ);

// for parents table
$sql = "SELECT * FROM parents";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$parent = $querry->fetchAll(PDO::FETCH_OBJ);

?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-9 ml-4 whole-dash">
        <div class="col-12 clas">
            <label for="">Student Table</label>
            <table class="table table-striped table-light table-borderless">
                <thead style="font-weight: 600;">
                    <tr>
                        <td>#</td>
                        <td>Student Name</td>
                        <td>Class</td>
                        <td>DOB</td>
                        <td>Sex/Gender</td>
                        <td>Religion</td>
                        <td>Admission Date</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <?php foreach ($admit as $samp) : ?>
                    <tr>
                        <td><?php echo $samp->id; ?></td>
                        <td><?php echo $samp->name; ?></td>
                        <td><?php echo $samp->class; ?></td>
                        <td><?php echo $samp->DOB; ?></td>
                        <td><?php echo $samp->gender; ?></td>
                        <td><?php echo $samp->religion; ?></td>
                        <td><?php echo $samp->admdate; ?></td>
                        <td><a href="#" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                        <td><a href="#" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
        <div class="col-12 clas">
            <label for="">Parent's Table</label>
            <table class="table table-striped table-light table-borderless">
                <thead style="font-weight: 600;">
                    <tr>
                        <td>#</td>
                        <td>Parent Name</td>
                        <td>Nationality</td>
                        <td>Phone Number</td>
                        <td>Email</td>
                        <td>Address</td>
                        <td>Student Name</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <?php foreach ($parent as $samp) : ?>
                    <tr>
                        <td><?php echo $samp->id; ?></td>
                        <td><?php echo $samp->parent_name; ?></td>
                        <td><?php echo $samp->nationality; ?></td>
                        <td><?php echo $samp->phone; ?></td>
                        <td><?php echo $samp->email; ?></td>
                        <td><?php echo $samp->address; ?></td>
                        <td><?php echo $samp->student_name; ?></td>
                        <td><a href="#" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                        <td><a href="#" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>