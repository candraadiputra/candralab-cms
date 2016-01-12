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
					$sql = "delete from bukutamu where idbukutamu='$id' ";
					mysql_query($sql) or die(mysql_error());

				}
				//==========================================?>
<div class='bs-docs-example'>
	<h2 id="headings"> Data buku tamu</h2>
	<table  class="table table-striped table-condensed">
		<thead>
		<th><td><h4>Nama  </h4></td><td><h4>Email  </h4></td><td><h4>pesan</h4></td><td><h4>Aksi</h4></td></th>
		</thead>
		<tbody>
		<?php
				//bata paging 
	$batas=5;
$halaman=$_GET['halaman'];
$pospesan=null;
if(empty($halaman)){
	$pospesan=0;
	$halaman=1;
}else{
	$pospesan=($halaman-1)* $batas;
}
		
$query="SELECT * from bukutamu limit $pospesan,$batas ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){

		?>
		<tr>
			<td><? echo $pospesan+$no
			?></td>
			<td><?		echo $rows -> nama;?></td>
				<td><?		echo $rows -> email;?></td>
					<td><?		echo $rows -> pesan;?></td>
			<td><a href="index.php?mod=bukutamu&pg=bukutamu_view&act=del&id=<?=	$rows -> idbukutamu;?>"
			onclick="return confirm('Yakin data akan dihapus?') ";
			class='btn'> <i class="icon-trash"></i></a></td>
		</tr>
		<?
	$no++;
	}?>

		
		</tbody>
	</table>
<?php	
//=============CUT HERE for paging====================================
$tampil2=mysql_query("select idbukutamu from bukutamu");
$jmldata=mysql_num_rows($tampil2);
$jumlah_halaman=ceil($jmldata/$batas);


echo "<div class='pagination'> <ul>";
for($i=1;$i<=$jumlah_halaman;$i++) 

echo "<li><a href='index.php?mod=bukutamu&pg=bukutamu_view&halaman=$i'>$i</a></li>";

mysql_close();
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


