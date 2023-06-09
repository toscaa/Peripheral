<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion bg-light" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Home</div>
                    <a class="nav-link" href="<?= $main_url ?>index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <hr class="mb-0">
                    <div class="sb-sidenav-menu-heading">Admin</div>
                    <a class="nav-link" href="<?= $main_url ?>User/add_user.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                        User
                    </a>
                    <hr class="mb-0">
                    <div class="sb-sidenav-menu-heading">Peripheral</div>
                    <a class="nav-link" href="<?= $main_url ?>Stock/stock.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                        Stock
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>index.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-computer"></i></div>
                        Computer
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>index.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-print"></i></div>
                        Toner
                    </a>
                    <hr class="mb-0">
                </div>
            </div>
            <div class="sb-sidenav-footer border">
                <div class="small">Logged in as:</div>
                <div class="text-capitalize"><?= $_SESSION['userLogin'] ?></div>

            </div>
        </nav>
    </div>