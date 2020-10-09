<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Data produk</title>
  </head>
  <body>
    <h1 class="textData">Data Produk</h1>
    <a href="tambah_produk.php">Tambahkan data produk</a>
    <br></br>
    <table cellspacing="0" cellpadding="10" border="1">
      <tr>
        <th>No.</th>
        <th>Nama produk</th>
        <th>Keterangan</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Aksi</th>
      </tr>
      <?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM produk ORDER BY nama_produk ASC");
        while($fetchPro = mysqli_fetch_assoc($data)){
          echo "
          <tr>
            <td>$no</td>
            <td>$fetchPro[nama_produk]</td>
            <td>$fetchPro[keterangan]</td>
            <td>$fetchPro[harga]</td>
            <td>$fetchPro[jumlah]</td>
            <td>
            <a href='edit_produk.php?nama_produk=$fetchPro[nama_produk]'>Edit | </a>
            <a href='hapus_produk.php?nama_produk=$fetchPro[nama_produk]'>Hapus</a>
            </td>
          </tr>
          ";
          $no++;
        }
      ?>
    </table>
  </body>
</html>