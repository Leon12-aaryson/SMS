<?php
require "dbconn.php";

$tableName = "events";

if (isset($_GET['delete'])) {
    $id = validate($_GET['delete']);
    $condition = ['id' => $id];
    $deleteMsg = delete_data($conn, $tableName, $condition);
    header("location:eventlist.php");
}

// Step 2: Rewrite delete_data function to use prepared statements with PDO
function delete_data($db, $tableName, $condition)
{
    $conditionData = '';
    $i = 0;
    foreach ($condition as $index => $data) {
        $and = ($i > 0) ? ' AND ' : '';
        $conditionData .= $and . $index . " = :" . $index;
        $i++;
    }

    $query = "DELETE FROM " . $tableName . " WHERE " . $conditionData;
    $stmt = $db->prepare($query);

    foreach ($condition as $index => $data) {
        $stmt->bindValue(":" . $index, $data);
    }

    try {
        $stmt->execute();
        $msg = "Data was deleted successfully";
    } catch (PDOException $e) {
        $msg = $e->getMessage();
    }

    return $msg;
}

function validate($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
