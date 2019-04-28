<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $kode=$_POST['kode'];
 $nama=$_POST['nama'];
 $kategori=$_POST['kategori'];
 $jumlah=$_POST['jumlah'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"UPDATE `barang` SET `kode`='$kode',`nama`='$nama',`kategori`='$kategori',`jumlah`='$jumlah',`harga`='$harga' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>