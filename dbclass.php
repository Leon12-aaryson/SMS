<?php
require "dbconn.php";

//contact form data
if (isset($_POST['submit'])) {
    $class = $_POST['class'];
    $name = $_POST['name'];
    $NOS = $_POST['NOS'];

    $sql = "INSERT INTO class (class_name, class_teacher, stud_num) VALUES (:class, :name, :NOS)";
    /** @var TYPE_NAME $conn */
    $querry = $conn->prepare($sql);

    $data = [
        ':class' => $class,
        ':name' => $name,
        ':NOS' => $NOS
    ];

    $insertdata = $querry->execute($data);

    if (isset($insertdata)) {
        $_SESSION['message'] = "Data Inserted";
    } else {
        $_SESSION['message'] = "Data insertion failed";
    }
    header('Location: addclass.php');
    die();
}
