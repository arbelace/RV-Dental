<?php 
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Dashboard</div>
                <a class="nav-link <?= $page == "index.php"? 'active bg-danger':''; ?>" href="../admin/index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Overview
                </a>

                <a class="nav-link <?= $page == "all_users.php"? 'active bg-danger':''; ?>" href="all_users.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    All Users
                </a>

                <a class="nav-link <?= $page == "all_blog.php"? 'active bg-danger':''; ?>" href="all_blog.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    News & Blogs
                </a>
            </div>
        </div>
    </nav>
</div>