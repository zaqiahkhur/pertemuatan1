<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Toko Wayang Kami</h1>
    <p>Program Aplikasi sederhana untuk menghitung penjualan barang di Toko Wayang Kami</p>

    <form action ="" method="POST" name ="penjualan">
        
  <div class="form-group">
    <label for="nm_barang">Nama Barang</label>
    <input type="text" class="form-control" id="nm_barang" name="nm_barang" Required>
  </div>
  <div class="form-group">
    <label for="h_barang">Harga barang</label>
    <input type="text" class="form-control" id="h_barang" name="h_barang" Required>
  </div>
  <div class="form-group">
    <label for="diskon">Diskon</label>
    <input type="text" class="form-control" id="diskon" name="diskon" Required>
  </div>
  <div class="form-group">
    <label for="jml_barang">Jumlah Barang</label>
    <input type="number" class="form-control" id="jml_barang" name="jml_barang" Required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Hitung</button>
  
</form>

<hr>
    <?php
    if(isset($_POST['submit'])){
      $nama =$_POST['nm_barang'];
      $harga =$_POST['h_barang'];
      $jumlah =$_POST['jml_barang'];
      $diskon1 =$_POST['diskon'];
      $total = $harga * $jumlah;
      $diskon = ($diskon1/100)*$total;
      $totalSetelahDiskon=$total-$diskon;

      echo"<div class ='container'>";
      echo"<h1>Jumlah yang harus di bayarkan  :</h1>";
      echo"<h4>Nama Barang  : $nama</h4>";
      echo"<h4>harga Barang : $harga</h4>";
      echo"<h4>Jumlah Barang: $jumlah</h4>";
      echo"<h4>Diskon : $diskon1 %</h4>";
      echo"<h4>Total pembayaran Setelah Diskon: Rp. ",number_format($totalSetelahDiskon), "</h4>";
      echo"</div>";
    }
    
    
    ?>


</div>

</body>
</html>