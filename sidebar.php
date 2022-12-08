<aside class="col-md-2 ml-2 side-bar">
    <ul class="sidebar ml-2 nav-links menu">
        <li>
            <a href="dashboard.php">
                <i class="fa fa-folder-open" aria-hidden="true"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="item">
            <div class="icon-link sub-btn">
                <a href="#">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Students</span>
                </a>
                <i class='bx bxs-chevron-right dropdown'></i>
            </div>
            <ul class="sub-menu">
                <li><a href="admission.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Student Admission</a></li>
                <li><a href="managestud.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Manage Students</a></li>
            </ul>
        </li>
        <li class="item">
            <div class="icon-link sub-btn">
                <a href="#">
                    <i class="fa fa-sticky-note" aria-hidden="true"></i>
                    <span>Reports</span>
                </a>
                <i class='bx bxs-chevron-right dropdown'></i>
            </div>
            <ul class="sub-menu">
                <li><a href="class.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Class Report</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Expense Report</a></li>
            </ul>
        </li>
        <li class="item">
            <div class="icon-link sub-btn">
                <a href="#">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <span>Class</span>
                </a>
                <i class='bx bxs-chevron-right dropdown'></i>
            </div>
            <ul class="sub-menu ">
                <li><a href="addclass.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Class Info</a></li>
                <!-- <li><a href="addclass.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Manage Class</a></li> -->
            </ul>
        </li>
        <li class="item">
            <div class="icon-link sub-btn">
                <a href="#">
                    <i class="fa fa-database" aria-hidden="true"></i>
                    <span>Inventory</span>
                </a>
                <i class='bx bxs-chevron-right dropdown'></i>
            </div>
            <ul class="sub-menu">
                <li><a href="addinventory.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Add Inventory</a></li>
                <li><a href="inventory.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Inventory Table</a></li>
            </ul>
        </li>
        <li>
            <a href="library.php">
                <i class="fa fa-book" aria-hidden="true"></i>
                <span>Study</span>
            </a>
        </li>
        <li class="item">
            <div class="icon-link sub-btn">
                <a href="#">
                    <i class="fa fa-chart-bar" aria-hidden="true"></i>
                    <span>Expenses</span>
                </a>
                <i class='bx bxs-chevron-right dropdown'></i>
            </div>
            <ul class="sub-menu">
                <li><a href="addexpense.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Add Expenses</a></li>
                <li><a href="expenses.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Expenses Report</a></li>
            </ul>
        </li>
        <li class="item">
            <div class="icon-link sub-btn">
                <a href="#">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                    <span>School Fees</span>
                </a>
                <i class='bx bxs-chevron-right dropdown'></i>
            </div>
            <ul class="sub-menu">
                <li><a href="addfees.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Fees Payment</a></li>
                <li><a href="fees.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Invoice</a></li>
            </ul>
        </li>
        <li class="item">
            <div class="icon-link sub-btn">
                <a href="#">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <span>School Gallery</span>
                </a>
                <i class='bx bxs-chevron-right dropdown'></i>
            </div>
            <ul class="sub-menu ">
                <li><a href="galleryupload.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Uploads</a></li>
                <li><a href="galleryadmin.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Manage Gallery</a></li>
            </ul>
        </li>
        <li>
            <a href="settings.php">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                <span>Setting</span>
            </a>
        </li>
        <li>
            <a href="login.php">
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</aside>
<style>
    .sidebar {
        background: var(--color-background);
        padding: 1.2rem;
        border-radius: var(--border-radius-1);
    }
</style>

<script src="static/bootstrap/js/jquery.js"></script>
<script src="static/bootstrap/js/bootstrap.min.js"></script>
<script src="static/bootstrap/js/bootstrap.min.js.map"></script>
<script type="text/javascript">
    $(document).ready(function() {
        //jquery for toggle sub menus
        $('.sub-btn').click(function() {
            $(this).next('.sub-menu').slideToggle(100);
            // setTimeout(() => {
            //     $(this).find('.dropdown').toggleClass('rotate');
            // }, 100);
            $(this).find('.dropdown').toggleClass('rotate');
        });
    });
</script>