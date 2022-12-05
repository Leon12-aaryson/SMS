<?php
require "dbconn.php";

//contact form data
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $DOB = $_POST['DOB'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $admdate = $_POST['admdate'];

    $sql = "INSERT INTO admission (name, class, DOB, gender, religion, admdate) VALUES (:name, :class, :DOB, :gender, :religion, :admdate)";
    /** @var TYPE_NAME $conn */
    $querry = $conn->prepare($sql);

    $data = [
        ':name' => $name,
        ':class' => $class,
        ':DOB' => $DOB,
        ':gender' => $gender,
        ':religion' => $religion,
        ':admdate' => $admdate
    ];

    $insertdata = $querry->execute($data);

    if (isset($insertdata)) {
        $_SESSION['message'] = "Data Inserted";
    } else {
        $_SESSION['message'] = "Data insertion failed";
    }
    header('Location: admission.php');
    die();
}
