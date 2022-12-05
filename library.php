<?php
$title = "Admin Dashboard";
require "header.php";
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-9 ml-4 whole-dash">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">File Upload</h5>
                <form action="dblibrary.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="filename">File Title</label>
                        <input id="filename" class="form-control" type="text" name="filename">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="class">Class</label>
                                <select id="class" class="form-control" name="class">
                                    <option>Select</option>
                                    <option>S.1</option>
                                    <option>S.2</option>
                                    <option>S.3</option>
                                    <option>S.4</option>
                                    <option>S.5</option>
                                    <option>S.6</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="update">Date</label>
                                <input id="update" class="form-control" type="date" name="update">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="upload">Upload file</label>
                        <input id="upload" class="form-control-file" type="file" name="upload">
                    </div>
                    <input type="submit" value="UPLOAD" class="form-group btn btn-primary" name="submit">
                </form>
            </div>
        </div>
    </div>
</div>