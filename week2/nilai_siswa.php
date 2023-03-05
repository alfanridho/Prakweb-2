<?php
// ambil data yang diinputkan/dikirim oleh user
// panggil file function untuk menggunakan code yang ada di file tersebut
require_once 'function.php';
$name = $_POST['name'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$_nilai = ($uts + $uas + $uas + $nilai_tugas) / 3;
$keterangan = kelulusan($_nilai);
$grade = grade($_nilai);

// mencetak nilai variabel
echo "Nama Mahasiswa : $name";
echo "<br/>Mata Kuliah : $mata_kuliah ";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas : $nilai_tugas";
echo "<br/>Keterangan : $keterangan";
echo "<br/>Grade : $grade";
?>