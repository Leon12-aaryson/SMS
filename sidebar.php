<aside class="col-md-3 ml-1 side-bar">
    <ul class="sidebar ml-2 nav-links menu">
        <li class="item">
            <div class="icon-link sub-btn">
                <a href="#">
                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                    <span>Events</span>
                </a>
                <i class='bx bxs-chevron-right dropdown'></i>
            </div>
            <ul class="sub-menu">
                <li><a href="addevents.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Add Events</a></li>
                <li><a href="eventlist.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Event list</a></li>
            </ul>
        </li>
        <li class="item">
            <div class="icon-link sub-btn">
                <a href="#">
                    <i class="fa fa-images" aria-hidden="true"></i>
                    <span>Logo Gallery</span>
                </a>
                <i class='bx bxs-chevron-right dropdown'></i>
            </div>
            <ul class="sub-menu ">
                <li><a href="logosupload.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Uploads</a></li>
                <li><a href="logos.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Manage Gallery</a></li>
            </ul>
        </li>
        <li class="item">
            <div class="icon-link sub-btn">
                <a href="#">
                    <i class="fa fa-image" aria-hidden="true"></i>
                    <span>Slider Gallery</span>
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