<?php
require "dbconn.php";

//registration form data
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (first_name, last_name, email, username, password) VALUES (:first_name, :last_name, :email, :username, :password)";
    /** @var TYPE_NAME $conn */
    $querry = $conn->prepare($sql);

    $data = [
        ':first_name' => $first_name,
        ':last_name' => $last_name,
        ':email' => $email,
        ':username' => $username,
        ':password' => $password,
    ];

    $insertdata = $querry->execute($data);

    if (isset($insertdata)) {
        $_SESSION['message'] = "Data Inserted";
        header('Location: login.php');
    } else {
        if (isset($insertdata)) {
            $_SESSION['message'] = "Data Inserted";
            header('Location: login.php');
        } else {
            $_SESSION['message'] = "Data insertion failed";
            header('Location: register.php');
            die("ERROR : Invalid input" . $e->getmessage());
        }
    }
}
