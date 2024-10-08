<?php
include 'database.php';

$id_customer=$_GET['id'];
if (!empty($id_customer)){
    mysqli_query($conn, "DELETE FROM customer where id_customer='$id_customer'");
    header('location:datacus.php');
}else{
    header('location:datacus.php');
}

?>