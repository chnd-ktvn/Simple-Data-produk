<?php
  include "koneksi.php";
  $hapus = mysqli_query($conn, "DELETE FROM produk WHERE nama_produk='$_GET[nama_produk]'");
  if($hapus){
    header("location:data_produk.php");
  } else {
    echo "Gagal menghapus data...";
  }
?>