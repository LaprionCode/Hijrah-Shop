<?php
include 'database.php';

$id_barang =$_GET['id_barang'];
if (!empty($id_barang)){
    mysqli_query($conn, "DELETE FROM barang where id_barang='$id_barang'");
    header('location:databrg.php');
}else{
    header('location:databrg.php');
}

?>