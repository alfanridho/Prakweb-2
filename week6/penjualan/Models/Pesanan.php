<?php
class Pesanan
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
        $sql = "SELECT p.*, c.kode AS kodecustomer
        FROM pesanan p INNER JOIN pelanggan c ON c.id = p.pelanggan_id
        ORDER BY c.id ASC";
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
