<?php  
$con = mysqli_connect("localhost", "root", "", "test qa");
//cek koneksi
if($con){
//echo "Berhasil Terhubung";
}else{
echo "Gagal Terhubung";
}
?>