<?php
require "dbconn.php";
//inventory data form
if (isset($_POST['submit'])) {
    $filename = $_POST['filename'];
    $class = $_POST['class'];
    $update = $_POST['update'];
    $upload = $_FILES['upload'];

    $sql = "INSERT INTO library (file_name, class, upload_date, file) VALUES (:filename, :class, :update, :upload)";
    /** @var TYPE_NAME $conn */
    $querry = $conn->prepare($sql);

    $data = [
        ':filename' => $filename,
        ':class' => $class,
        ':update' => $update,
        ':upload' => $upload
    ];

    $insertdata = $querry->execute($data);

    if (isset($insertdata)) {
        $_SESSION['message'] = "Data Inserted";
    } else {
        $_SESSION['message'] = "Data insertion failed";
    }
    header('Location: library.php');
    die();
}
