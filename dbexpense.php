<?php
require "dbconn.php";

//contact form data
if (isset($_POST['submit'])) {
    $amount = $_POST['amount'];
    $reason = $_POST['reason'];
    $expdate = $_POST['expdate'];

    $sql = "INSERT INTO expenses (amount, reason, expense_date) VALUES (:amount, :reason, :expdate)";
    /** @var TYPE_NAME $conn */
    $querry = $conn->prepare($sql);

    $data = [
        ':amount' => $amount,
        ':reason' => $reason,
        ':expdate' => $expdate
    ];

    $insertdata = $querry->execute($data);

    if (isset($insertdata)) {
        $_SESSION['message'] = "Data Inserted";
    } else {
        $_SESSION['message'] = "Data insertion failed";
    }
    header('Location: addexpense.php');
    die();
}
