<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
session_start();
require_once ('../inc/config.php');

$username=$_POST['username'];
$password = md5(trim($_POST['password']));
$tipe=$_SESSION['tipe'];

$sql = "update $tipe  set password='$password' where username='$username'";

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../index.php?mod=user&pg=profil&status=0');
} else {
	$goto="location:../index.php?mod=user&pg=profil&status=1";
	header($goto);
}

?>
