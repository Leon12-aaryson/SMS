<?php
$title = "Expense";
require "header.php";
require "dbconn.php";


$sql = "SELECT * FROM expenses";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$sample = $querry->fetchAll(PDO::FETCH_OBJ);

?>
<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-9 ml-4 whole-dash">
        <div class="startcard col-12">
            <h4>Expense List</h4>
        </div>
        <table class="table table-striped table-light table-borderless col-10">
            <thead style="font-weight: 600;">
                <tr>
                    <td>#</td>
                    <td>Amount</td>
                    <td>Reason</td>
                    <td>Expense Date</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <?php foreach ($sample as $samp) : ?>
                <tr>
                    <td><?= $samp->id; ?></td>
                    <td> UGX <?= $samp->amount; ?></td>
                    <td><?= $samp->reason; ?></td>
                    <td><?= $samp->expense_date; ?></td>
                    <td><a href="#" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                    <td><a href="#" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>