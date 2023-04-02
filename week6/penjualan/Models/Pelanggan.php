<?php
class Pelanggan
{
    private $koneksi;
    // akses property yang bersifat private menggunakan $this
    public function __construct()
    {
        // function construct adalah function yang pertama kali dijalankan
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil()
    {
        // cetak seluruh data table produk menggunakan query select
        $sql = "SELECT * FROM pelanggan";
        // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data yang sudah disiapkan menggunakana method prepare
        $ps->execute();
        // siapkan data sql yang sudah dieksekusi menggunakan method fetchAll
        $data = $ps->fetchAll();
        // kembalikan data produk yang dalam bentuk array
        return $data;
    }
}
