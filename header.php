<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "include.php" ?>
</head>

<body>
    <section class="top-nav">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand">OLAM</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">LOGIN<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Item 2</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <?php
    include "footer.php";
    ?>