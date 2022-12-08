<?php
session_start();
if(!isset($_SESSION["email"])){
    header("Location: index.php");
}

$title = "Admin Dashboard";
require "header.php";
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-9 ml-4 whole-dash">
        <div class="row dash-detail">
            <div class="startcard col-12">
                <h4>Admin dashboard</h4>
            </div>
            <div class="card col-md-3">
                <span>
                    <h4>Students</h4>
                    <p>578</p>
                </span>
                <span>
                    <i class="fa fa-book" aria-hidden="true"></i>
                </span>
            </div>
            <div class="card col-md-3">
                <span>
                    <h4>Staff</h4>
                    <p>168</p>
                </span>
                <span>
                    <i class="fa fa-book" aria-hidden="true"></i>
                </span>
            </div>
            <div class="card col-md-3">
                <span>
                    <h4>Parents</h4>
                    <p>357</p>
                </span>
                <span>
                    <i class="fa fa-book" aria-hidden="true"></i>
                </span>
            </div>
            <div class="card col-md-3">
                <span>
                    <h4>Admin</h4>
                    <p>1</p>
                </span>
                <span>
                    <i class="fa fa-book" aria-hidden="true"></i>
                </span>
            </div>
            <div class="card col-md-3">
                <span>
                    <h4>Expense</h4>
                    <p>Ugx 120000</p>
                </span>
                <span>
                    <i class="fa fa-book" aria-hidden="true"></i>
                </span>
            </div>
            <div class="card col-md-3">
                <span>
                    <h4>Income</h4>
                    <p>Ugx 20000000</p>
                </span>
                <span>
                    <i class="fa fa-book" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        <div class="row card-group">
            <div class="card col-md-5">
                <h5 class="card-title text-muted">Messages</h5>
                <div class="mesage ml-3">
                    <h5 class="name">
                        Nansubuga Denise
                    </h5>
                    <p class="text-muted">
                        thanks for your payment of tuition
                    </p>
                </div>
            </div>
            <div class="card col-md-5">
                <h5 class="card-title text-muted">Notices</h5>
                <div class="mesage ml-3">
                    <h5 class="name">
                        ADMIN </h5>
                    <p class="text-muted">
                        All students are required to do clearnace od tuition by the time of examination
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include './dashboardscrit.php' ?>