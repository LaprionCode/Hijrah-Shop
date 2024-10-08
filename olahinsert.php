<?php
include 'database.php';
// if(isset($_POST['submit'])){
$nama_customer=$_POST['nama_customer'];
$alamat_customer=$_POST['alamat_customer'];
$no_hp=$_POST['no_hp'];
$keterangan=$_POST['keterangan'];


// $query="INSERT into customer SET nama_customer='$nama',alamat_customer='$alamat',nohp='$nohp',keterangan='$ket'";
// mysqli_query($conn, $query);
// header("location:datacus.php");


if(!empty($nama_customer) && !empty($alamat_customer) && !empty($no_hp) && !empty($keterangan)){
    mysqli_query($conn ,"INSERT INTO customer (nama_customer, alamat_customer, no_hp,keterangan)
     VALUES('$nama_customer', '$alamat_customer', '$no_hp', '$keterangan')");

    $alert = "<script>alert('We have save your data pls come again!!');</script>";
    echo $alert;
    echo "<h1><center>Data berhasil tersimpan</center></h1>";
    echo "<h1><center> Thanks, We shall contact you when it's ready </a></h1></center> ";
    echo "<h1><center> <a href=index.php> Go Back </a></h1></center> ";
}else{
    header('location:contact.php');
}

?>