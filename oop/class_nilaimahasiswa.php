<?php
//Class
Class NilaiSiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;
    public $matakuliah;

    public function __construct($_nim,$_nama,$_prodi,$_nilai, $_matakuliah){
        $this->nim = $_nim;
        $this->nama = $_nama;
        $this->prodi = $_prodi;
        $this->nilai = $_nilai;
        $this->matakuliah = $_matakuliah;
    }

    public function grade() {
        if ($this->nilai >= 85 ) return "A";
        elseif ($this->nilai >= 70 ) return "B";
        elseif ($this->nilai >= 56 ) return "C";
        elseif ($this->nilai >= 36 ) return "D";
        else return "E";

    }
    public function getHasil() {
        if ($this->nilai > 55) return "LULUS";
        else return "TIDAK LULUS";
    }
}

//objek
// $ns1 = new NilaiSiswa();
// $ns1->nama = "Umam";
// $ns1->nilai = 99;
// $ns1->matakuliah = "PW";
$ns1 = new Nilaisiswa ("0110223218","Fatih","Teknik Informatika",99,"PemWeb");
$ns2 = new Nilaisiswa ("0110223218","Amal","Teknik Informatika",99,"English Languange");

//cetak
echo "Nim : $ns1->nim <br>";
echo "Nama Mahasiswa : $ns1->nama <br>";
echo "Prodi : $ns1->prodi <br>";
echo "Nilai : $ns1->nilai <br>";
echo "Mata Kuliah : $ns1->matakuliah <br>";
echo "Grade : ". $ns1->grade() . "<br>";
echo "Status: ". $ns1->getHasil();

echo "<br><br>";

echo "Nim : $ns2->nim <br>";
echo "Nama Mahasiswa : $ns2->nama <br>";
echo "Prodi : $ns2->prodi <br>";
echo "Nilai : $ns2->nilai<br>";
echo "Mata Kuliah : $ns2->matakuliah<br>";
echo "Grade : ". $ns1->grade() . "<br>";
echo "Status: ". $ns2->getHasil();
?>