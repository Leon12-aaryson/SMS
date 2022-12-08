<?php
session_start();
$title = "Login";
include "header.php";
?>

<div class="logging">
    <!-- <form action=""> -->
    <form action="logindb.php" method="post">
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