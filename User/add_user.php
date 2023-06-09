<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: ../login.php");
  exit;
}
require_once "../function.php";

$title = "Dashboard - Peripheral MIS";
require_once "../Template/header.php";
require_once "../Template/navbar.php";
require_once "../Template/sidebar.php";



?>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Tambah User</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
        <li class="breadcrumb-item active">Tambah User</li>
      </ol>
      <form action="" method="post">
        <div class="card">
          <div class="card-header">
            <span class="h5"><i class="fa-solid fa-square-plus"></i> Tambah User</span>
            <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
            <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
          </div>
          <div class="card-body">
            <?php
            //Jika Tombol Simpan Regis Di klik
            if (isset($_POST['simpan'])) {
              if ($registrasi = registrasi($_POST) > 0) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                User berhasil di tambahkan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              };
            }
            ?>
            <?php if (isset($registrasi['error'])) : ?>
              <p><?= $registrasi['pesan']; ?></p>
            <?php endif; ?>
            <div class="row">
              <div class="col-8">
                <div class="mb-3 row">
                  <label for="username" class="col-sm-3 col-form-label">Username</label>
                  <label class="col-sm-1 col-form-label ">:</label>
                  <div class="col-sm-8" style="margin-left: -40px;">
                    <input required autofocus autocomplete="off" type="text" pattern="[A-Za-z0-9]{3,}" title="Minimal 3 Karakter kombinasi huruf besar dan angka" class="form-control border-0 border-bottom" id="username" name="username" placeholder="Masukkan Username Anda" maxlength="25">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="username" class="col-sm-3 col-form-label">Nama</label>
                  <label class="col-sm-1 col-form-label ">:</label>
                  <div class="col-sm-8" style="margin-left: -40px;">
                    <input required autocomplete="off" type="text" class="form-control border-0 border-bottom" id="nama" name="nama" placeholder="Masukkan Nama Anda">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="username" class="col-sm-3 col-form-label">Roles</label>
                  <label class="col-sm-1 col-form-label ">:</label>
                  <div class="col-sm-8" style="margin-left: -40px;">
                    <select required autocomplete="off" name="roles" id="roles" class="form-select border-0 border-bottom">
                      <option value="" selected>--Pilih Roles--</option>
                      <option value="Administrator">Administrator</option>
                      <option value="User">User</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="password" class="col-sm-3 col-form-label">Password</label>
                  <label class="col-sm-1 col-form-label ">:</label>
                  <div class="col-sm-8" style="margin-left: -40px;">
                    <input required type="password" pattern="[A-Za-z0-9]{3,}" title="Minimal 3 Karakter kombinasi huruf besar dan angka" class="form-control border-0 border-bottom" id="password1" name="password1" placeholder="Masukkan Password Anda" maxlength="25">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="password" class="col-sm-3 col-form-label"> Komfirmasi</label>
                  <label class="col-sm-1 col-form-label ">:</label>
                  <div class="col-sm-8" style="margin-left: -40px;">
                    <input required type="password" pattern="[A-Za-z0-9]{3,}" title="Minimal 3 Karakter kombinasi huruf besar dan angka" class="form-control border-0 border-bottom" id="password2" name="password2" placeholder="Masukkan Password Anda Lagi" maxlength="25">
                  </div>
                </div>
              </div>
              <div class="col-4">
              </div>
            </div>
          </div>
        </div>
    </div>
    </form>

  </main>
  <?php

  require_once "../Template/footer.php";

  ?>