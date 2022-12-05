<?php
$title = "Student admission";
require "header.php";
require "dbconn.php";


$sql = "SELECT * FROM class";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$class = $querry->fetchAll(PDO::FETCH_OBJ);

?>


<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-9 ml-4 whole-dash">
        <div class="startcard col-12">
            <h4>Add Class Detail</h4>
        </div>
        <div class="row p-2">
            <div class="card regcard col-md-6 p-2">
                <div class="card-body">
                    <!-- <h5 class="card-title">Admission Form-A</h5> -->
                    <form action="dbclass.php" class="form-group" method="POST">
                        <div class="form-group">
                            <label for="class">Class</label>
                            <select id="class" class="form-control" name="class">
                                <option>Select</option>
                                <option>S.1</option>
                                <option>S.2</option>
                                <option>S.3</option>
                                <option>S.4</option>
                                <option>S.5</option>
                                <option>S.6</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Class Teacher's Name</label>
                            <input id="name" class="form-control" type="text" id="name" name="name" placeholder="Enter Full names">
                        </div>
                        <div class="form-group">
                            <label for="NOS">Number Of students</label>
                            <input type="text" name="NOS" id="NOS" class="form-control" placeholder="Number Of students">
                        </div>
                        <button type="submit" name="submit" class="form-group btn btn-primary">UPDATE</button>
                    </form>
                </div>
            </div>
            <div class="col-10 clas">
                <label for="">Class Table</label>
                <table class="table table-striped table-light table-borderless">
                    <thead style="font-weight: 600;">
                        <tr>
                            <td>#</td>
                            <td>Class</td>
                            <td>Class Teacher</td>
                            <td>Student Number</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                    </thead>
                    <?php foreach ($class as $samp) : ?>
                        <tr>
                            <td><?php echo $samp->class_id; ?></td>
                            <td><?php echo $samp->class_name; ?></td>
                            <td><?php echo $samp->class_teacher; ?></td>
                            <td><?php echo $samp->stud_num; ?></td>
                            <td><a href="#" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td><a href="#" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>