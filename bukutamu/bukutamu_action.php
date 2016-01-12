<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
include ('../inc/config.php');
//data dari bukutamu

$nama = $_POST['nama'];
$email=$_POST['email'];
$pesan = $_POST['pesan'];
$aksi = $_POST['aksi'];
$id = $_POST['id'];

$sql = null;
if ($aksi == 'tambah') {
	$sql = "INSERT INTO bukutamu(nama,email,pesan,tanggal)
		VALUES('$nama','$email','$pesan',now())";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../index.php?mod=bukutamu&pg=bukutamu_uview&status=0');
} else {
	header('location:../index.php?mod=bukutamu&pg=bukutamu_uview&status=1');
}
mysql_close();
?>
