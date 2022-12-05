<?php
require "dbconn.php";
//inventory data form
if (isset($_POST['submit'])) {
    $department = $_POST['department'];
    $dephead = $_POST['dephead'];
    $item = $_POST['item'];
    $DOP = $_POST['DOP'];
    $total = $_POST['total'];
    $exp = $_POST['exp'];

    $sql = "INSERT INTO inventory (dept, dept_head, item_name, date_purchased, total, expenditure) VALUES (:department, :dephead, :item, :DOP, :total, :exp)";
    /** @var TYPE_NAME $conn */
    $querry = $conn->prepare($sql);

    $data = [
        ':department' => $department,
        ':dephead' => $dephead,
        ':item' => $item,
        ':DOP' => $DOP,
        ':total' => $total,
        ':exp' => $exp
    ];

    $insertdata = $querry->execute($data);

    if (isset($insertdata)) {
        $_SESSION['message'] = "Data Inserted";
    } else {
        $_SESSION['message'] = "Data insertion failed";
    }
    header('Location: addinventory.php');
    die();
}
