<?php
session_start(); //mulai session

// cek terlebih dahulu apakah user sudah submit atau belum form login atau belum
// gunakan method isset
// ambil data yang diimputkan user berdasarkan uniq name
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // validasi username dan passwordnya disini
    if($username == "alfan" AND $password == "1234"){
        // jika username dan password sama, ararhkan ke file home.php
        $_SESSION['username'] = $username;
        header('Location: home.php');
        exit();
    }else{
        // jika username dan oan password salah tampilkan pesan error
        header("Location: index.php");
        exit();
    }
}



?>
