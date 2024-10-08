<?php 
     $host = 'localhost';
     $uname = 'root';
     $pass = '';
     $db = 'hijrah_shop';

     $koneksi=mysqli_connect($host,$uname,$pass,$db);

     $user=$_POST['username'];
     $pass=$_POST['password'];

     $sql=mysqli_query($koneksi,"select * from admin where username = '$user' and password = '$pass'");

     $cek=mysqli_num_rows($sql);

     if($cek >0){
 
        echo "<center>selamat datang anda berhasil login<br>";
        echo "silahkan logout <a href=logout.php> logout</a></center>";
        header("location:../datacus.php");
     }else {
      $alert = "<script>alert('Ur Input Wrong or you not mean to be here??');</script>";
      echo $alert;
      echo "<h1><center>pls get out you not mean to be here <a href=index.php> Good bye </a></h1> ";
     }

?>