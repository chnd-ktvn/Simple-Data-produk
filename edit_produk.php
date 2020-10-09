<?php
  include "koneksi.php";
  $ambil = mysqli_query($conn, "SELECT * FROM produk WHERE nama_produk='$_GET[nama_produk]'");
  $fetchProAmbil = mysqli_fetch_assoc($ambil);  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Edit Data Produk</title>
  </head>
  <body>
    <h1>Edit Data Produk</h1>
    <form method="POST" action="">
      <ul>  
        <li>
          <label for="name">Nama produk</label>
          <input id="name" name="txtNama" value="<?=$fetchProAmbil['nama_produk']?>" readonly>
        </li>
        <li>
          <label for="ket">Keterangan</label>
          <input id="ket" name="txtKet" value="<?=$fetchProAmbil['keterangan']?>">
        </li>
        <li>
          <label for="harga">Harga</label>
          <input id="harga" name="txtHarga" value="<?=$fetchProAmbil['harga']?>">
        </li>
        <li>
          <label for="jumlah">Jumlah</label>
          <input id="jumlah" name="txtJumlah" value="<?=$fetchProAmbil['jumlah']?>">
        </li>
        <li>
          <button type="submit" name="submit">Edit data</button>
        </li>
      </ul> 
    </form>
    <?php
      if(isset($_POST["submit"])){
      $edit = mysqli_query($conn, "UPDATE produk SET keterangan='$_POST[txtKet]', harga='$_POST[txtHarga]', jumlah='$_POST[txtJumlah]' WHERE nama_produk='$_POST[txtNama]'");
        if($edit){
          header("location:data_produk.php");
        } else {
          echo "Gagal mengedit data...";
        }
      } 
    ?>
  </body>
</html>