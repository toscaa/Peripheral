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
        <li class="breadcrumb-item"><a href="<?= $main_url ?>Stock/stock.php">Stock</a></li>
        <li class="breadcrumb-item active">Tambah Stock</li>
      </ol>
      <form action="" method="post">
        <div class="card">
          <div class="card-header">
            <span class="h5"><i class="fa-solid fa-square-plus"></i> Tambah User</span>
            <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
            <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-8">
                <div class="mb-3 row">
                  <label for="description" class="col-sm-3 col-form-label">Description</label>
                  <label class="col-sm-1 col-form-label ">:</label>
                  <div class="col-sm-8" style="margin-left: -40px;">
                    <input required autofocus autocomplete="off" type="text" class="form-control border-0 border-bottom" id="description" name="description">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="sn" class="col-sm-3 col-form-label">Serial Number</label>
                  <label class="col-sm-1 col-form-label ">:</label>
                  <div class="col-sm-8" style="margin-left: -40px;">
                    <input required autofocus autocomplete="off" type="text" class="form-control border-0 border-bottom" id="sn" name="sn">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="merk" class="col-sm-3 col-form-label">Merk</label>
                  <label class="col-sm-1 col-form-label ">:</label>
                  <div class="col-sm-8" style="margin-left: -40px;">
                    <input required autofocus autocomplete="off" type="text" class="form-control border-0 border-bottom" id="merk" name="merk">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="category" class="col-sm-3 col-form-label">Roles</label>
                  <label class="col-sm-1 col-form-label ">:</label>
                  <div class="col-sm-8" style="margin-left: -40px;">
                    <select required autocomplete="off" name="category" id="category" class="form-select border-0 border-bottom">
                      <option value="Administrator">Motherboard</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="purchasedate" class="col-sm-3 col-form-label">Purchase Date</label>
                  <label class="col-sm-1 col-form-label ">:</label>
                  <div class="col-sm-8" style="margin-left: -40px;">
                    <input required autofocus autocomplete="off" type="date" class="form-control border-0 border-bottom" id="purchasedate" name="purchasedate">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="supplier" class="col-sm-3 col-form-label">Supplier</label>
                  <label class="col-sm-1 col-form-label ">:</label>
                  <div class="col-sm-8" style="margin-left: -40px;">
                    <select required autocomplete="off" name="supplier" id="supplier" class="form-select border-0 border-bottom">
                      <option value="Administrator">Motherboard</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="price" class="col-sm-3 col-form-label">Price</label>
                  <label class="col-sm-1 col-form-label ">:</label>
                  <div class="col-sm-8" style="margin-left: -40px;">
                    <input required autofocus autocomplete="off" type="text" class=" form-control border-0 border-bottom" id="price" name="price" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="offdate" class="col-sm-3 col-form-label">Off Date</label>
                  <label class="col-sm-1 col-form-label ">:</label>
                  <div class="col-sm-8" style="margin-left: -40px;">
                    <input required autofocus autocomplete="off" type="date" class="form-control border-0 border-bottom" id="offdate" name="offdate">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="remark" class="col-sm-3 col-form-label">Remark</label>
                  <label class="col-sm-1 col-form-label ">:</label>
                  <div class="col-sm-8 form-floating" style="margin-left: -40px">
                    <textarea class="form-control border-0 border-bottom" id="remark" name="remark"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-4"></div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </main>
  <?php

  require_once "../Template/footer.php";

  ?>