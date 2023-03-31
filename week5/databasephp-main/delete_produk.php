<?php 
require_once 'dbkoneksi.php';
?>
            
<?php
    if(isset($_GET['iddel'])){
        $id = $_GET['iddel'];

        // Query SQL untuk menghapus data produk dengan id yang sesuai
        $sql = "DELETE FROM produk WHERE id=$id";
        $result = $dbh->exec($sql);

        // Redirect ke halaman utama setelah proses delete selesai
        header("Location: list_produk.php");
        exit();
    }
?>
