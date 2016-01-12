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
					$sql = "delete from berita where idberita='$id' ";
					mysql_query($sql) or die(mysql_error());

				}
				//==========================================?>
<div class='bs-docs-example'>
	<h2 id="headings"> Data berita</h2>
	<table  class="table table-striped table-condensed">
		<thead>
		<th><td><h4>Judul berita </h4></td><td><h4>Aksi</h4></td></th>
		</thead>
		<tbody>
		<?php
				//bata paging 
	$batas=5;
$berita=$_GET['berita'];
$posisi=null;
if(empty($berita)){
	$posisi=0;
	$berita=1;
}else{
	$posisi=($berita-1)* $batas;
}
		
$query="SELECT * from berita order by tanggal desc limit $posisi,$batas ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){

		?>
		<tr>
			<td><? echo $posisi+$no
			?></td>
			<td><?		echo $rows -> judul;?></td>
			<td><a href="index.php?mod=berita&pg=berita_form&id=<?=	$rows -> idberita;?>" class='btn'><i class="icon-pencil"></i></a><a href="index.php?mod=berita&pg=berita_view&act=del&id=<?=	$rows -> idberita;?>"
			onclick="return confirm('Yakin data akan dihapus?') ";
			class='btn'> <i class="icon-trash"></i></a></td>
		</tr>
		<?
	$no++;
	}?>

		<tr>
			<td colspan='2' ></td><td><a href="index.php?mod=berita&pg=berita_form"
			class='btn'	><i class="icon-plus"></i></a></td>
		</tr>
		</tbody>
	</table>
<?php	
//=============CUT HERE for paging====================================
$tampil2=mysql_query("select idberita from berita");
$jmldata=mysql_num_rows($tampil2);
$jumlah_berita=ceil($jmldata/$batas);


echo "<div class='pagination'> <ul>";
pagination($berita, $jumlah_berita,"berita");
?>
</ul>
</div>
<br>Jumlah data :<?=$jmldata;?>
	<?php
// KODE UNTUK MENAMPILKAN PESAN STATUS
if(isset($_GET['status'])) {
	if($_GET['status'] == 0) {
		echo " Operasi data berhasil";
	} else {
		echo "operasi gagal";
	}
}

//close database	?>

</div>
