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

  $alert = '';

  //Cek username jika sudah ada
  if (query("SELECT * FROM tbl_user WHERE username = '$username'")) {
    echo "<script>
            alert ('Username yang anda masukkan sudah terdaftar !');
            document.location.href = 'add_user.php';
          </script>";
    return false;
  }

  //Jika Komfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert ('Komfirmasi password tidak sesuai');
            document.location.href = 'add_user.php';
          </script>";
    return false;
  }

}


$main_url = "http://localhost/Peripheral/";
