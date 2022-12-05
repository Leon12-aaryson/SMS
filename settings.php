<?php
$title = "Admin Dashboard";
require "header.php";
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-9 ml-4 whole-dash">
        <div class="card regcard col-md-7 p-3">
            <div class="card-body">
                <h5 class="card-title">System settings</h5>
                <form action="" class="form-group">
                    <div class="form-group">
                        <label for="pname">System Name</label>
                        <input id="pname" class="form-control" type="text" name="pname">
                    </div>
                    <div class="form-group">
                        <label for="pname">Address</label>
                        <input id="pname" class="form-control" type="text" name="pname">
                    </div>
                    <div class="form-group">
                        <label for="ptel">Management Number</label>
                        <input id="ptel" class="form-control" type="text" name="ptel">
                    </div>
                    <div class="form-group">
                        <label for="mail">Management email</label>
                        <input id="mail" class="form-control" type="text" name="mail">
                    </div>
                    <div class="form-group">
                        <label for="address">System Footer</label>
                        <input id="address" class="form-control" type="text" name="address">
                    </div>
                    <input type="button" value="Update" class="form-group btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>