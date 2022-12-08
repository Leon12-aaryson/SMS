<?php
session_start();
$title = "Login";
include "header.php";
?>

<!-- <div class="card login">
    <center>
        <div class="col-md-6">
            <form class="col-md-12" method="POST">
                <label for="title" style="font-size: 1.3rem; color: green; text-decoration:underline;">Login</label>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="myname" placeholder="Your UserName" name="username">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Your Password" name="password">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Login</button>
                <div class="dont mt-3">
                    <h4 class="h6">Dont have an account? <a href="register.php">SignUp</a></h4>
                </div>
            </form>
        </div> -->
<!-- </center> -->

<div class="logging">
    <div class="card p-3 col-6">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control" type="email" placeholder="Enter Email" name="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control" type="password" placeholder="Enter password" name="password">
            </div>
            <button value="LOGIN" name="submit" class="form-group btn btn-primary">LOGIN</button>
        </form>
    </div>

</div>

<?php
include "footer.php";
?>

<style>

</style>