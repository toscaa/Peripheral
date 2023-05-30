<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?= $main_url ?>index.php">Peripheral MIS</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <span class="text-white text-capitalize"><?= $_SESSION['userLogin'] ?></span>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" data-bs-toggle="modal" href="#mdlProfileUser">Profile User</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?= $main_url ?>logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <?php
    $username = $_SESSION["userLogin"];
    $conn = koneksi();
    $result = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result)
    ?>


    //Profile User
    <div class="modal" tabindex="-1" id="mdlProfileUser">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Profile User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3 border-0" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title mb-3 text-capitalize ps-1">
                                        <?= $row['username'] ?>
                                    </h4>
                                    <hr>
                                    <div class="row">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                        <label class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-8">
                                            <input type="text" readonly class="form-control border-0 bg-transparent" id="nama" value="<?= $row['nama'] ?>">
                                        </div>
                                        <label for="nama" class="col-sm-3 col-form-label">Roles</label>
                                        <label class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-8">
                                            <input type="text" readonly class="form-control border-0 bg-transparent" id="roles" value="<?= $row['roles'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>