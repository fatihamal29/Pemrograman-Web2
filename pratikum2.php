<?php
    include_once 'header.php';
    include_once 'sidebar.php';
?>
 
 
 
 
 <!-- main.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pratikum</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pratikum 2</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- KONTEN KIRI -->
<div class="row">
<div class="konten-kiri col-md-6 mb-5">
<h2>Belanja Online</h2>
<div class="container-fluid mt-5">
<form method="GET" action="#">
  <div class="form-group row">
    <label for="nama" class="col-3 col-form-label">Customer</label> 
    <div class="col-7">
      <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-3">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV" required="required"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-3 col-form-label">Jumlah</label> 
    <div class="col-4">
      <input id="text" name="jumlah" placeholder="Masukkan Jumlah" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-3 col-8 mt-2">
      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>
</div>
</div>

<!-- KONTEN KANAN -->
  <div class="konten-kanan col-md-6">
    <div class="ml-5">
        <div class="ml-5">
            <div class="ml-5">
                <div class="ml-5">
                  <div class="ml-5">
                    <ul class="list-group">
                      <li class="list-group-item active">Daftar Harga</li>
                      <li class="list-group-item">TV : Rp. 4.200.000</li>
                      <li class="list-group-item">Kulkas : Rp. 3.100.000</li>
                      <li class="list-group-item">Mesin Cuci : Rp. 3.800.000</li>
                      <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


<?php

if (isset($_GET['nama']) && isset($_GET['produk']) && isset($_GET['jumlah']))
{

$nama_pelanggan = $_GET["nama"];
$pilih_pr = $_GET["produk"];
$jumlah_pr = $_GET["jumlah"];
$nilai_tv = "4.200.000";
$nilai_kulkas = "3.100.000";
$nilai_mesin_cuci = "3.800.000";
$haga_tv = 4200000;
$haga_kulkas = 3100000;
$haga_mesin_cuci = 3800000;

switch ($pilih_pr) 
{
    case 'TV':
        $total = $haga_tv * $jumlah_pr;
        break;
    case 'Kulkas':
        $total = $haga_kulkas * $jumlah_pr;
        break;
    case 'Mesin Cuci':
        $total = $haga_mesin_cuci * $jumlah_pr;
        break;
    default:
        echo "Produk tidak valid";
        break;
}

echo "Nama Customer: ". $nama_pelanggan . "<br>";
echo "Produk Pilihan: ". $pilih_pr . "<br>";
echo "Jumlah Beli: ". $jumlah_pr . "<br>";
echo "Total Belanja: " . "Rp. ".  $total;
}
?>









              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                - ini hasil pratikum 2 -
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include_once 'footer.php'
?>