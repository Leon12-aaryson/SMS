<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "include.php" ?>
</head>
<style>
    .logo{
        display: none;
    }
</style>
<body>
    <section class="top-nav">
        <nav>
            <!-- <img src="#" alt="" class="logo"> -->
            <img src="static/uploads/logo.png" alt="" class="profile">
            <div class="other">
                <ul>
                    <li class="SMS_name"></li>
                    <li><a href="">Home</a></li>
                    <li><a href="">Settings</a></li>
                </ul>
                <img src="static/uploads/logo.png" alt="" class="profile" onclick="toggleMenu()">
                <div class="sub-menu-wrap" id="sub-Menu">
                    <div class="profile-menu">
                        <div class="user-info">
                            <img src="static/uploads/imagesSMS1.jpg" alt="">
                            <h5>System manager</h5>
                        </div>
                        <hr>
                        <div class="profile-links">
                            <!-- <li>
                                <a href="#" class="sub-menu-link">
                                    <i class="bx bx-cog"></i>
                                    <span>Inbox</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="sub-menu-link">
                                    <i class="bx bx-cog"></i>
                                    <span>Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="sub-menu-link">
                                    <i class="bx bx-cog"></i>
                                    <span>Account Setting</span>
                                </a>
                            </li> -->
                            <li>
                                <a href="#" class="sub-menu-link">
                                    <i class="bx bx-cog"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <script>
            let subMenu = document.getElementById("sub-Menu");

            function toggleMenu() {
                subMenu.classList.toggle("open-menu");
            }
        </script>
    </section>
    <?php
    include "footer.php";
    ?>