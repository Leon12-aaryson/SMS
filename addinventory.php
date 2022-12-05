<?php
$title = "Student admission";
require "header.php";

require "dbconn.php";
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-9 ml-4 whole-dash">
        <div class="startcard col-12">
            <h4>Add Inventory</h4>
        </div>
        <div class="row p-2">
            <div class="card regcard col-md-6 p-2">
                <div class="card-body">
                    <!-- <h5 class="card-title">Admission Form-A</h5> -->
                    <form action="dbinventory.php" class="form-group" method="POST">
                        <div class="form-group">
                            <label for="department">Department</label>
                            <select id="department" class="form-control" name="department">
                                <option>Select</option>
                                <option>Finance</option>
                                <option>Wellfare</option>
                                <option>Academics</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dephead">Department Head</label>
                            <input id="dephead" class="form-control" type="text" id="dephead" name="dephead" placeholder="Department Head">
                        </div>
                        <div class="form-group">
                            <label for="item">Item</label>
                            <input id="item" class="form-control" type="text" id="item" name="item" placeholder="Enter Item Name">
                        </div>
                        <div class="form-group">
                            <label for="DOP">Date of Purchase</label>
                            <input id="DOP" class="form-control" type="date" id="DOP" name="DOP" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="total">Total Items</label>
                            <input id="total" class="form-control" type="text" id="total" name="total" placeholder="Number Purchased">
                        </div>
                        <div class="form-group">
                            <label for="exp">Total Expenditure</label>
                            <input type="text" name="exp" id="exp" class="form-control" placeholder="Expenditure">
                        </div>
                        <button type="submit" class="form-group btn btn-primary" name="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>