<?php
//OOP (Object Oriented Programer)
//Class = tamplate/blueprint ex: denah rumah dll
//Object = isi dalam class ex: isi rumah


//hak akses
//public
//private
//protected : untuk 

//class
class Nilaisiswa
{
    public $nama;
    public $nilai;
    public $matakuliah;

    public function getHasil() {
        if ($this-> nilai > 55) return "Lulus";
        else return "Tidak Lulus";
    }
}

//Object
$ns1 = new Nilaisiswa();
$ns1->nama = "Umam";
$ns1->nilai = 99;
$ns1->matakuliah = "PW";

//Cetak
echo "Nama Mahasiswa : $ns1->nama <br>";
echo "Nilai : $ns1->nilai <br>";
echo "Mata Kuliah : $ns1->matakuliah <br>";
echo "Status : " . $ns1->getHasil();



?>