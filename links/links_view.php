<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
 

		//===========CODE DELETE RECORD ================
				require_once ('inc/config.php');
				if(isset($_GET['act'])) {
					$id = $_GET['id'];
					$sql = "delete from links where idlinks='$id' ";
					mysql_query($sql) or die(mysql_error());

				}
?>

	<h2 id="headings"> Data links</h2>
	<table  class="table table-condensed table-striped table-hover">
		<thead>
		<th class='info'><td><h4>Nama </h4></td><td><h4>URL</h4></td><td><h4>Aksi</h4></td></th>
		</thead>
		<tbody>
		<?php
$query="SELECT * from links ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){

		?>
		<tr>
			<td><? echo $no
			?></td>
			<td><b><?		echo $rows ->nama;?><b></td>
				
						<td><?		echo $rows ->url;?></td>
			<td><a href="index.php?mod=links&pg=links_form&id=<?=	$rows -> idlinks;?>" class='btn'><i class="icon-pencil"></i></a><a href="index.php?mod=links&pg=links_view&act=del&id=<?=	$rows -> idlinks;?>"
			onclick="return confirm('Yakin data akan dihapus?') ";
			class='btn'> <i class="icon-trash"></i></a></td>
		</tr>
		<?
	$no++;
	}?>

		<tr>
			<td colspan=3 ></td><td><a href="index.php?mod=links&pg=links_form"
			class='btn'	><i class="icon-plus"></i></a></td>
		</tr>
		</tbody>
	</table>
	<?php
// KODE UNTUK MENAMPILKAN PESAN STATUS
if(isset($_GET['status'])) {
	if($_GET['status'] == 0) {
		echo " Operasi data berhasil";
	} else {
		echo "operasi gagal";
	}
}

;
	?>


