<?php
$host="localhost";
$uname="root";
$pass="";
$db="hijrah_shop";

    $conn = mysqli_connect($host, $uname, $pass, $db) or die ('Gagal terhubung ke database');

?>

<?php
class database{
    var $host = 'localhost';
    var $uname = 'root';
    var $pass = '';
    var $db = 'hijrah_shop';
    var $con;

    function __construct(){
        $this->con=mysqli_connect($this->host, 
        $this->uname,$this->pass,$this->db);
        mysqli_select_db($this->con, $this->db);
    }
    function tampil_barang(){
        $data = mysqli_query($this->con,"select * from barang ");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
    function tampil_customer(){
        $data = mysqli_query($this->con, "SELECT * FROM customer");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function input($namab,$harga,$desk){
        mysqli_query($this->con, "INSERT INTO user (nama_barang,harga,deskripsi) VALUES('$namab','$harga','$desk')");
    }
    
    function tampil_data_id($id_barang){
        $data = mysqli_query($this->con, "SELECT * FROM barang WHERE id_barang='$id_barang'");
        while($d = mysqli_fetch_array($data)){
            $hasil = $d;
        }
        return $hasil;
    }

    function hapus($id_barang) {
        mysqli_query($this->con,"delete from barang where id_barang ='$id_barang'");
    }

    }

    ?>