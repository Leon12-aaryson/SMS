<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "include.php" ?>
</head>

<body>
    <section class="top">
        <nav class="navbar navbar-expand-lg bg-custom fixed-top">
            <a class="navbar-brand">OLAM</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php" tabindex="-1">About</a>
                    </li>
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="performance.php" tabindex="-1">Performance</a>-->
<!--                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="curriculum.php" tabindex="-1">Curriculum <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php" tabindex="-1">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" tabindex="-1">Contact </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" tabindex="-1">Admin </a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>


    <style>
        .navbar-toggler-icon i {
            color: white;
            font-size: 1.2rem;
        }

        @media (max-width: 1020px) {
            .navbar{
                border-radius: .2rem;
            }
        }
    </style>