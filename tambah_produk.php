<?php
  include "koneksi.php";
  if(isset($_POST["submit"])){
    $tambah = mysqli_query($conn, "INSERT INTO produk VALUES ('$_POST[txtNama]', '$_POST[txtKet]', '$_POST[txtHarga]', '$_POST[txtJumlah]')");
    if($tambah){
      header("location:data_produk.php");
    } else {
      echo "Gagal menambahkan data...";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Tambah Data Produk</title>
  </head>
  <body>
    <h1>Tambah Data Produk</h1>
    <form method="POST" action="">
      <ul>  
        <li>
          <label for="name">Nama produk</label>
          <input id="name" name="txtNama" required>
        </li>
        <li>
          <label for="ket">Keterangan</label>
          <input id="ket" name="txtKet">
        </li>
        <li>
          <label for="harga">Harga</label>
          <input id="harga" name="txtHarga">
        </li>
        <li>
          <label for="jumlah">Jumlah</label>
          <input id="jumlah" name="txtJumlah">
        </li>
        <li>
          <button type="submit" name="submit">Tambahkan data</button>
        </li>
      </ul> 
    </form> 
  </body>
</html>