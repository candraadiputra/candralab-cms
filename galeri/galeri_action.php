<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
 
require_once ('../inc/config.php');
//data dari galeri



$keterangan = $_POST['keterangan'];


//kode upload
$lokasi_file = $_FILES['foto']['tmp_name'];
$foto_file = $_FILES['foto']['name'];
$tipe_file = $_FILES['foto']['type'];
$ukuran_file = $_FILES['foto']['size'];
$direktori = "../upload/galeri/$foto_file";
$sql = null;
$MAX_FILE_SIZE = 1000000;
//100kb
if($ukuran_file > $MAX_FILE_SIZE) {
	header("Location:../index.php?mod=galeria&pg=galeri_form&status=1");
	exit();
}

move_uploaded_file($lokasi_file, $direktori);

$sql = "INSERT INTO galeri(keterangan,foto)
		VALUES('$keterangan','$foto_file')";

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if($result) {
	header('location:../index.php?mod=galeri&pg=galeri_view&status=0');
} else {
	header('location:../index.php?mod=galeri&pg=galeri_view&status=1');
}
;?>
