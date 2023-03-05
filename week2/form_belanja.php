
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
  <h3 style="text-align: left;">Belanja Online</h3>
  <hr>
  <div class="row">
    <div class="col-8">
      <form method="POST" action="form_belanja.php">
        <div class="form-group row">
          <label for="customer" class="col-4 col-form-label">Customer</label> 
          <div class="col-8">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-address-card"></i>
                </div>
              </div> 
              <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Pilih Produk</label> 
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
              <label for="produk_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
              <label for="produk_1" class="custom-control-label">KULKAS</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESINCUCI"> 
              <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
          <div class="col-8">
            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
          </div>
        </div> 
        <div class="form-group row">
          <div class="offset-4 col-8">
            <input type="submit" value="Kirim" name="proses" class="btn btn-success">
          </div>
        </div>
      </form>
    </div>
    <div class="col-4">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Daftar Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>TV 4.200.000</td>
          </tr>
          <tr>
            <td>Kulkas 3.100.000</td>
          </tr>
          <tr>
            <td>MESIN CUCI 3.800.000</td>
          </tr>
          <tr>
            <td>Harga dapat berubah setiap saat</td>
          </tr>
        </tbody>
       </table>
    </div>
         

<?php
// ambil data yang diinputkan/dikirim oleh user
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

define('TV', 4200000);
define('KULKAS', 3100000);
define('MESINCUCI', 3800000);

if($produk == 'TV'){
  $total = TV * $jumlah;
}elseif($produk == 'KULKAS'){
  $total = KULKAS * $jumlah;
}elseif($produk == 'MESINCUCI'){
  $total = MESINCUCI * $jumlah;
}

echo "Nama Customer : $customer";
echo "<br/>Produk pilihan : $produk";
echo "<br/>Jumlah beli : $jumlah";
echo "<br/>Total harga : $total";

?>
</body>
</html>