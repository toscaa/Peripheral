<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require_once "../function.php";

$title = "Stock - Peripheral MIS";
require_once "../Template/header.php";
require_once "../Template/navbar.php";
require_once "../Template/sidebar.php";

?>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Stock Peripheral</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= $main_url ?>index.php">Home</a></li>
        <li class="breadcrumb-item active">Stock</li>
      </ol>
      <div class="card">
        <div class="card-header">
          <span class="h5 my-2  "><i class="fa-solid fa-list"></i>Tambah Stock</span>
          <a href="<?= $main_url ?>Stock/add_stock.php" class="btn btn-sm btn-primary float-end" title="Tambah Stock"><i class="fa-solid fa-pen-to-square"></i> Tambah Stock</a>
        </div>
        <div class="card-body">
          <table id="Tbl_Stock" class="display table table-hover" style="width:100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>
                  <center>Description</center>
                </th>
                <th>
                  <center>Merk</center>
                </th>
                <th>
                  <center>Serial Number</center>
                </th>
                <th>
                  <center>Category</center>
                </th>
                <th>
                  <center>Action</center>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td align="center">
                  <a href="" class="btn btn-sm btn-success" title="Details"><i class="fa-solid fa-pen-to-square"></i> Details</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </main>

  <?php

  require_once "../Template/footer.php";

  ?>
  <script>
    $(document).ready(function() {
      $('#Tbl_Stock').DataTable();
    });
  </script>