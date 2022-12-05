<?php
require "dbconn.php";

//contact form data
if (isset($_POST['submit'])) {
    $pname = $_POST['pname'];
    $nation = $_POST['nation'];
    $ptel = $_POST['ptel'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $stud_name = $_POST['stud_name'];

    $sql = "INSERT INTO parents (parent_name, nationality, phone, email, address, student_name) VALUES (:pname, :nation, :ptel, :mail, :address, :stud_name)";
    /** @var TYPE_NAME $conn */
    $querry = $conn->prepare($sql);

    $data = [
        ':pname' => $pname,
        ':nation' => $nation,
        ':ptel' => $ptel,
        ':mail' => $mail,
        ':address' => $address,
        ':stud_name' => $stud_name
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
