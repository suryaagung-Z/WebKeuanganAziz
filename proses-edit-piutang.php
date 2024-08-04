<?php
//include('dbconnected.php');
session_start();
include('koneksi.php');

$id = $_GET['id_piutang'];
$jumlah = $_GET['jumlah'];
$tgl = $_GET['tgl_piutang'];
$alasan = $_GET['alasan'];
$pbf = $_GET['pbf'];

//query update
$query = mysqli_query($koneksi,"UPDATE piutang SET jumlah='$jumlah' , tgl_piutang='$tgl', alasan='$alasan', pbf='$pbf' WHERE id_piutang='$id' ");

 define('LOG','log.txt');
function write_log($log){  
 $time = @date('[Y-d-m:H:i:s]');
 $op=$time.' '.$log."\n".PHP_EOL;
 $fp = @fopen(LOG, 'a');
 $write = @fwrite($fp, $op);
 @fclose($fp);
}
//jika benar

$namaadmin = $_SESSION['nama'];


if ($query) {
write_log("Nama Admin : ".$namaadmin." => Edit piutang => ".$id." => Sukses ");
 # credirect ke page index
 header("location:piutang.php?pesan=berhasil_update"); 
}
else{
	write_log("Nama Admin : ".$namaadmin." => Edit piutang => ".$id." => Gagal");
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>