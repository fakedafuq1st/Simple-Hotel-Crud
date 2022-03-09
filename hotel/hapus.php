<?php
include 'koneksi.php';
$hapus  = "DELETE FROM tamu  WHERE id = '".$_GET['id']."'"; //query hapus

$proses = mysqli_query($conn, $hapus) or die(mysql_error());

echo "<script language=javascript>parent.location.href='harga.php';</script>";
?>
