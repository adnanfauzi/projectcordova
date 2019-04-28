<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $kode=$_POST['kode'];
 $nama=$_POST['nama'];
 $kategori=$_POST['kategori'];
 $jumlah=$_POST['jumlah'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `barang` (`kode`,`nama`,`kategori`,`jumlah`,`harga`) VALUES ('$kode','$nama','$kategori','$jumlah','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>