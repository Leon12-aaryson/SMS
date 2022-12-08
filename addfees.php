<?php
$title = "Student payments";
require "header.php";
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-9 ml-4 whole-dash">
        <div class="startcard col-12">
            <h4>Student Payment</h4>
        </div>
        <div class="row p-2">
            <div class="card regcard col-md-5 p-2">
                <div class="card-body">
                    <h5 class="card-title">Payment Form-A</h5>
                    <form action="dbadmission.php" class="form-group" method="POST">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input id="name" class="form-control" type="text" id="name" name="name" placeholder="Enter Full names">
                        </div>
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
                            <label for="payment">Total Amount Due</label>
                            <input type="text" name="DOB" id="payment" class="form-control" placeholder="Amount Paid">
                        </div>
                        <div class="form-group">
                            <label for="payment">Amount Paid</label>
                            <input type="text" name="DOB" id="payment" class="form-control" placeholder="Amount Paid">
                        </div>
                        <div class="form-group">
                            <label for="payment">Balance</label>
                            <input type="text" name="DOB" id="payment" class="form-control" placeholder="Amount Paid">
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="DOP" id="payment" class="form-control" placeholder="Payment Date">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>