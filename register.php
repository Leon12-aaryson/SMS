<?php
session_start();
$title = "Login";
include "header.php";
?>

<div class="logging">
    <!-- <form action=""> -->
    <form action="regd.php" method="post" class="col-6">
        <div class="mb-3 mt-3">
            <label for="fname" class="form-label">First Name:</label>
            <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
        </div>
        <div class="mb-3 mt-3">
            <label for="lname" class="form-label">Last Name:</label>
            <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>


</div>

<?php
include "footer.php";
?>

<style>

</style>