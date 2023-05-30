<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'peripheral');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $nama = htmlspecialchars(strtolower($data['nama']));
  $roles = htmlspecialchars(strtolower($data['roles']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);


  //Cek username jika sudah ada
  if (query("SELECT * FROM tbl_user WHERE username = '$username'")) {
    return [
      'error' => true,
      'pesan' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Selamat registrasi berhasil user anda sudah bisa di gunakan !!!
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>'
    ];
  }

  //Jika Komfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    return [
      'error' => true,
      'pesan' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Komfirmasi Password tidak sesuai
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>'
    ];
  }
  //Enkripsi Password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);

  //Insert ke Tbl_user
  $query = "INSERT INTO tbl_user
            VALUES
            (null,'$username','$nama','$roles','$password1')";

  mysqli_query($conn, $query) or die(mysqli_errno($conn));
  return mysqli_affected_rows($conn);
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  if (query("SELECT * FROM tbl_user WHERE username = '$username' && password = '$password'")) {
    //Set Session
    $_SESSION['login'] = true;
    $_SESSION['userLogin'] = $username;
    header("Location: index.php");
    exit;
  } else {
    return [
      'error' => true,
      'pesan' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Username / Password Salah !
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>'
    ];
  }
}

$main_url = "http://localhost/Peripheral/";
