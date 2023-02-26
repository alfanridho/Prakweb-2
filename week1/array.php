<?php
// array indexing
$ar_buah = ['pisang','jambu','pepaya'];
echo $ar_buah[2];

// cetak hitung jumlah data array
echo '<br/> Jumlah Buah : '.count($ar_buah);

// tambahkan data array 
$ar_buah[] = "durian";

// hapus index ke-1
unset($ar_buah[1]);

// ubah index ke-2 menjadi buah manggis
$ar_buah[2] = "manggis";

// cetak seluruh data array
echo "<ol>";
foreach ($ar_buah as $buah){
    echo "<li>$buah</li>";
}
echo "</ol>";

// array assosiatif
$buah = ["P"=>"Pisang","J"=>"Jambu","A"=>"Pepaya"];
?>