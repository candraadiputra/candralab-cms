<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
session_start();

include ('../inc/config.php');

$username= $_POST['username'];
$password = md5(trim($_POST['password']));
$tipe=$_POST['tipe'];


$sql = "select * from "  .$tipe.  " where username='$username'
  and password='$password' ";
  if($tipe=='siswa'){
  	$sql="select  * from siswa where nis='$username'
  and password='$password'";
  }
echo $sql;
$sql_login = mysql_query($sql) or die(mysql_error());

//exit();
$hasil = mysql_fetch_object($sql_login);

if(mysql_num_rows($sql_login) == 1) {
	$_SESSION['username'] = $username;
	$_SESSION['tipe']=$tipe;
	
	
	header("Location:../index.php?mod=login&pg=welcome");

} else {
	$goto="location:../index.php?mod=login&pg=form_login&status=1&t=".$tipe;
	header($goto);
}?>

