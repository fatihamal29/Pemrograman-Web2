<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas= $_GET['nilai_tugas'];

//Buat Total Nilai
//nilai_uts+nilai_uas+nilai_tugas/3
$total_nilai = ( $nilai_uts + $nilai_uas + $nilai_tugas ) /3;

//Buat Perhitungan IF Untuk Mencari Grade
if ($total_nilai >=85) {
    $grade = "A";

}
else if ($total_nilai >=70) {
    $grade = "B";
}
else if ($total_nilai >=56) {
    $grade = "C";    
}
else if ($total_nilai >=30) {
    $grade = "D";    
}
else {
    $grade = "E";
}

//Buat Perhitungan SWITCHCASE Untuk Mencari Predikat
Switch ($grade){
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    default :
        $predikat = "Tidak Ada";
        break;
}

//Buat Perhitungan IF Untuk Mencari Status Lulus/Gagal
if ($total_nilai >= 70){
    $status ="Lulus";
}
else{
    $status ="Tidak Lulus";
}

echo 'Nama  '.$nama.'<br>';
echo 'Mata Kuliah  '.$matkul.'<br>';
echo "Nilai UTS $nilai_uts <br> ";
echo "Nilai UAS $nilai_uas <br> ";
echo "Nilai Tugas $nilai_tugas <br>";
echo "Total Nilai $total_nilai <br>";
echo "Grade $grade <br>";
echo "Predikat Nilai $predikat <br>";
echo "Status $status <br>";
?>