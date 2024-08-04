<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_pengeluaran'];
$tgl = $_GET['tgl_pengeluaran'];
$pbf = $_GET['nama_pengeluaran'];
$faktur = $_GET['nomor_faktur'];
$jumlah = $_GET['jumlah'];
$sumber = $_GET['id_sumber'];

//query update
$_query = "UPDATE pengeluaran SET tgl_pengeluaran='$tgl' , jumlah='$jumlah', nama_pengeluaran='$pbf', nomor_faktur='$faktur', id_sumber='$sumber' WHERE id_pengeluaran='$id'";
$query = mysqli_query($koneksi, $_query);

if ($query) {
    # credirect ke page index
    header("location:pengeluaran.php");
} else {
    echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

//mysql_close($host);
