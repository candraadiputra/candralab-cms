<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
 
include ('../inc/config.php');
//data dari links
$nama= $_POST['nama'];
$url = $_POST['url'];
$aksi = $_POST['aksi'];
$id = $_POST['id'];

//echo $url;
//exit;
$sql = null;
if($aksi == 'tambah') {
	$sql = "INSERT INTO links(nama,url)
		VALUES('$nama', '$url')";
}else if($aksi == 'edit') {
	$sql = "update links set nama='$nama',
			url='$url' where idlinks='$id'";

}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if($result) {
	header('location:../index.php?mod=links&pg=links_view&level=0');
} else {
	header('location:../index.php?mod=links&pg=links_view&level=1');
}
?>
