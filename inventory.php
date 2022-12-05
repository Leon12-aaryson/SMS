<?php
$title = "Admin Dashboard";
require "header.php";

require "dbconn.php";

$sql = "SELECT * FROM inventory";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$inventory = $querry->fetchAll(PDO::FETCH_OBJ);

?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-9 ml-4 whole-dash">
        <!-- <?php
                include "welcome.php"
                ?> -->
        <div class="col-12 clas">
            <label for="">Inventory Table</label>
            <table class="table table-striped table-light table-borderless">
                <thead style="font-weight: 600;">
                    <tr>
                        <td>#</td>
                        <td>Department</td>
                        <td>Department Head</td>
                        <td>Item Name</td>
                        <td>Date of Purchase</td>
                        <td>Total Items</td>
                        <td>Total Expenditure</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <?php foreach ($inventory as $samp) : ?>
                    <tr>
                        <td><?php echo $samp->id; ?></td>
                        <td><?php echo $samp->dept; ?></td>
                        <td><?php echo $samp->dept_head; ?></td>
                        <td><?php echo $samp->item_name; ?></td>
                        <td><?php echo $samp->date_purchased; ?></td>
                        <td><?php echo $samp->total; ?></td>
                        <td>UGX <?php echo $samp->expenditure; ?></td>
                        <td><a href="#" class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                        <td><a href="#" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>