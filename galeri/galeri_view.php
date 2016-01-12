<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
 
		//===========CODE DELETE RECORD ================
			
				if(isset($_GET['act'])) {
					$no= $_GET['no'];
					$sql = "delete from galeri where no='$no' ";
					mysql_query($sql) or die(mysql_error());
					//$path='upload/'.$nama;
					//unlink($path);

				}
				//==========================================?>

	<h2 id="headings"> Foto foto wisata</h2>
		<a href='index.php?mod=galeri&pg=thumbnail_view'><i class="icon-picture"></i>Thumbnail</a>
			
			
			
			

			
	<table  class="table  table-condensed">
		<thead>
		<th><td><h4>Foto </h4></td><td><h4>Keterangan </h4></td><td><h4>Aksi</h4></td></th>
		</thead>
		<tbody>
			
		<?php
		//bata paging 
	$batas=5;
$halaman=$_GET['halaman'];
$posisi=null;
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}else{
	$posisi=($halaman-1)* $batas;
}


$query="SELECT * from galeri limit $posisi,$batas";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){

		?>
		<tr>
			<td><? echo $posisi+$no
			?></td>
			<td><?		echo $rows -> foto;?></td>
		
				<td><?		echo $rows ->keterangan;?></td>
			<td>
				<a href="index.php?mod=galeri&pg=galeri_view&act=del&no=<?=	$rows -> no;?>"
			onclick="return confirm('Yakin data akan dihapus?') ";
			class='btn'> <i class="icon-trash"></i></a></td>
		</tr>
		<?
	$no++;
	}?>

		<tr>
			<td colspan='3' ></td><td><a href="index.php?mod=galeri&pg=galeri_form"
			class='btn'	><i class="icon-plus"></i></a></td>
		</tr>
		</tbody>
	</table>
	<?
//=============CUT HERE for paging====================================
$tampil2=mysql_query("select no from galeri");
$jmldata=mysql_num_rows($tampil2);
$jumlah_halaman=ceil($jmldata/$batas);


echo "<div class='pagination'> <ul>";
for($i=1;$i<=$jumlah_halaman;$i++) 

echo "<li><a href='index.php?mod=galeri&pg=galeri_view&halaman=$i'>$i</a></li>";

;
?>
</ul>
</div>
<br>Jumlah data :<?=$jmldata;?>
	<?
	
// KODE UNTUK MENAMPILKAN PESAN STATUS
if(isset($_GET['status'])) {
	if($_GET['status'] == 0) {
		echo " Operasi data berhasil";
	} else {
		echo "operasi gagal";
	}
}


//close database	?>


