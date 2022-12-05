<?php
$title = "Expense";
require "header.php";
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-9 ml-4 whole-dash">
        <div class="startcard col-12">
            <h4>Expense form</h4>
        </div>
        <div class="row p-2">
            <div class="card regcard col-md-5 p-2">
                <div class="card-body">
                    <h5 class="card-title">Expense Form</h5>
                    <form action="dbexpense.php" class="form-group" method="POST">
                        <div class="form-group">
                            <label for="amount">Full Amount</label>
                            <input id="amount" class="form-control" type="text" id="amount" name="amount" placeholder="Enter Amount">
                        </div>
                        <div class="form-group">
                            <label for="reason">Reason</label>
                            <input type="text" name="reason" id="reason" class="form-control" placeholder="Reason">
                        </div>
                        <div class="form-group">
                            <label for="expdate">Expense Date</label>
                            <input type="date" name="expdate" id="expdate" class="form-control" placeholder="Admission Date">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                    </form>
                </div>
            </div>

        </div>
    </div>