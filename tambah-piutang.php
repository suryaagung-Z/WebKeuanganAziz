<?php
//include('dbconnected.php');
include('koneksi.php');

$jumlah = $_GET['jumlah'];
$tgl = $_GET['tgl_piutang'];
$alasan = $_GET['alasan'];
$pbf = $_GET['pbf'];


//query update
$query = mysqli_query($koneksi,"INSERT INTO `piutang` (`jumlah`, `tgl_piutang`, `alasan`, `pbf`) VALUES ('$jumlah', '$tgl_piutang', '$alasan','$pbf')");

if ($query) {
 # credirect ke page index
 header("location:piutang.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>