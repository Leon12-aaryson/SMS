<?php
require "dbconn.php";

// validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $err = "Field is empty";
        // header('Location: err404.php');
        die();
    } else {
        $name = $_POST["name"];
    }
    if (empty($_POST["email"])) {
        $err = "Field is empty";
        // header('Location: err404.php');
        die();
    } else {
        $name = $_POST["email"];
    }
    if (empty($_POST["reason"])) {
        $err = "Field is empty";
        // header('Location: err404.php');
        die();
    } else {
        $name = $_POST["reason"];
    }
}

//contact form data
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];
    $region = $_POST['region'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (name, email, reason, region, message) VALUES (:name, :email, :reason, :region, :message)";
    /** @var TYPE_NAME $conn */
    $querry = $conn->prepare($sql);

    $data = [
        ':name' => $name,
        ':email' => $email,
        ':reason' => $reason,
        ':region' => $region,
        ':message' => $message
    ];

    $insertdata = $querry->execute($data);

    if (isset($insertdata)) {
        $_SESSION['message'] = "Data Inserted";
    } else {
        $_SESSION['message'] = "Data insertion failed";
    }
    header('Location: contact.php');
    die();
}
