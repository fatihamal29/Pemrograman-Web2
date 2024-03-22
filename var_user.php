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