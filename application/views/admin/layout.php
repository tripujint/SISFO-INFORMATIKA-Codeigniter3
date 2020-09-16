<!DOCTYPE html>
<html>

<head>
	<?php $this->view($head) ?>
</head>

<body class="animsition">
	<div class="page-wrapper">

    	<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">    
                    <img src="images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <h4 class="name"><?php echo $nama_admin; ?></h4>
                    <small class="text-muted"><?php echo $username; ?></small><br>
                    <a href="<?php echo base_url(); ?>login/logout"><i class="zmdi zmdi-power" style="margin-right: 5px;"></i>Logout</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>admin/berita">
                                <i class="fa fa-sticky-note"></i>Berita</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>admin/data">
                                <i class="fas fa-user"></i>Admin</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <h4 class="name">john doe</h4>
                        <small class="text-muted">john</small><br>
                        <a href="#"><i class="zmdi zmdi-power" style="margin-right: 5px;"></i>Logout</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="inbox.html">
                                    <i class="fas fa-chart-bar"></i>Berita</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>Dosen</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>Admin</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

    		<?php $this->view($body) ?>

    	</div>

	</div>

	<?php $this->view($foot) ?>
    
    <script type="text/javascript">
        $(document).ready( function () {
            $('#data-tables').DataTable();
        } );
    </script>

</body>
</html>