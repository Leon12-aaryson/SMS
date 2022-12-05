<?php
$title = "Registration Form";
include "header.php";
?>
<section class="embod">
    <div class="abt row">
        <form class="col-md-6" data-aos="zoom-in-right" action="regdata.php" method="POST">
            <label for="title" style="font-size: 1.3rem;">Register with Us</label>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="myname">First Name</label>
                    <input type="text" class="form-control" id="myname" placeholder="Your Name" name="first_name">
                </div>
                <div class="form-group col-md-6">
                    <label for="myname">Last Name</label>
                    <input type="text" class="form-control" id="myname" placeholder="Your Name" name="last_name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Your Username">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Confirm Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Confirm Password" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
        </form>

        <div class="col-md-4" data-aos="fade-left">
            <label for="events" style="margin-top: 1rem; font-size: 1.3rem;">School Events</label>
            <div class="card">
                <div class="card-body">
                    <img class="card-img-top" src="static/images/gals.jpg" alt="Card image cap">
                    <h5 class="card-title">S.1 and S.5 Admissions</h5>
                    <p class="card-text">The entry admissions for both A'level and O'level are ongoing,
                        please book your on time.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 months ago</small></p>
                </div>
            </div>

            <div class="card" data-aos="fade-left">
                <div class="card-body">
                    <img class="card-img-top" src="static/images/dance.JPG" alt="Card image cap">
                    <h5 class="card-title">Students sports days</h5>
                    <p class="card-text">We as OUR LADY embrace our students talents and skills and help
                        them build up for both social and economic gains. Students get chance to try out their
                        talents, and we support them on building them.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 months ago</small></p>
                </div>
            </div>

        </div>
    </div>
</section>
<?php
include "footer.php";
