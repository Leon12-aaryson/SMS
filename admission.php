<?php
$title = "Student admission";
require "header.php";
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-9 ml-4 whole-dash">
        <div class="startcard col-12">
            <h4>Student Admission</h4>
        </div>
        <div class="row p-2">
            <div class="card regcard col-md-5 p-2">
                <div class="card-body">
                    <h5 class="card-title">Admission Form-A</h5>
                    <form action="dbadmission.php" class="form-group" method="POST">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input id="name" class="form-control" type="text" id="name" name="name" placeholder="Enter Full names">
                        </div>
                        <div class="form-group">
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
                        <div class="form-group">
                            <label for="DOB">Date Of Birth</label>
                            <input type="date" name="DOB" id="DOB" class="form-control" placeholder="Date Of Birth">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select id="gender" class="form-control" name="gender">
                                <option class="default">Select</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="religion">Religion</label>
                            <input id="religion" class="form-control" type="text" id="religion" name="religion" placeholder="Religion">
                        </div>
                        <div class="form-group">
                            <label for="admdate">Admission Date</label>
                            <input type="date" name="admdate" id="admdate" class="form-control" placeholder="Admission Date">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
            <div class="card regcard col-md-6 p-2">
                <div class="card-body">
                    <h5 class="card-title">Admission Form-B</h5>
                    <form action="dbparent.php" class="form-group" method="POST">
                        <div class="form-group">
                            <label for="pname">Parent Name</label>
                            <input id="pname" class="form-control" type="text" name="pname">
                        </div>
                        <div class="form-group">
                            <label for="nation">Nationality/Citizenzhip</label>
                            <input id="nation" class="form-control" type="text" name="nation">
                        </div>
                        <div class="form-group">
                            <label for="ptel">Phone Number</label>
                            <input id="ptel" class="form-control" type="text" name="ptel">
                        </div>
                        <div class="form-group">
                            <label for="mail">Parent email</label>
                            <input id="mail" class="form-control" type="text" name="mail">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" class="form-control" type="text" name="address">
                        </div>
                        <div class="form-group">
                            <label for="stud_name">Student Name</label>
                            <input id="stud_name" class="form-control" type="text" name="stud_name">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>