<?php
session_start();

require '../function.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Register Peripheral - MIS</title>
  <link href="<?= $main_url ?>Asset/sb-admin/css/styles.css" rel="stylesheet" />
  <link rel="shortcut icon" href="<?= $main_url ?>Asset/image/computer-set.png" type="image/x-icon">
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">Create Account</h3>
                </div>
                <div class="card-body">
                  <form method="POST" action="">
                    <div class="card-body">
                      <?php
                      //Jika Tombol Simpan Regis Di klik
                      if (isset($_POST['simpan'])) {
                        if ($registrasi = registrasi($_POST) > 0) {
                          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Selamat user berhasil dibuat, Silahkan Login.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                        };
                      }
                      ?>
                      <?php if (isset($registrasi['error'])) : ?>
                        <p><?= $registrasi['pesan']; ?></p>
                      <?php endif; ?>
                      <div class="row">
                        <div class="col-12">
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
                    <div class="mt-4 mb-0">
                      <button type="submit" name="simpan" class="btn btn-primary float-end ">Create Account</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center py-3">
                  <div class="small"><a href="<?= $main_url ?>login.php">Have an account? Go to login</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <div id="layoutAuthentication_footer">
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; PT. Industri Karet Deli 2023</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="<?= $main_url ?>Asset/sb-admin/js/scripts.js"></script>
</body>

</html>