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
                <h3 class="card-title">Pratikum 1</h3>

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
              <?php 
// definisikan variables
$nama = 'Rosalie Naurah';
$umur = 13;
$berat = 22.4;   //koma pakai titil

echo 'namaku adalah :' . $nama;
echo ' <br> ';
echo 'Nama : ' . $nama;
echo '<br/>Umur : ' . $umur.' Tahun'; // titik adalah pemisah antara varibel dan text
echo '<br/>Berat : '.$berat.' Kg';

echo "<br/>Hello $nama Apakabar";

echo ' <hr>';

// variable system
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

echo ' <hr>';

// definisikan variabel konstanta
// define : untuk memanggil variabel konstantan
define( 'PELAJARAN', 'pemweb');
echo PELAJARAN;


?>





              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                - ini hasil pratikum 1 -
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