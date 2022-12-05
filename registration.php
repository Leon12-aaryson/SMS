<?php
$title = "Login";
include "header.php";
?>

<div class="embod login">
    <div class="card">
        <form class="col-md-6">
            <label for="title" style="font-size: 1.3rem;">login From</label>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="myname">First Name</label>
                    <input type="text" class="form-control" id="myname" placeholder="Your Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="myname">Last Name</label>
                    <input type="text" class="form-control" id="myname" placeholder="Your Name">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>

            <!-- <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>