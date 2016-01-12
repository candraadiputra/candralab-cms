<?php /* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013
 */
?>
<h3 id="headings"> Isi buku tamu</h3>
	
	<a href='index.php?mod=bukutamu&pg=bukutamu_form' class='btn btn-primary'>Isi Buku tamu</a>
		
		<h3 id="headings"> buku tamu</h3>
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
		
$query="SELECT * from bukutamu limit $posisi,$batas ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){

		?>
		
	<div class='span8 well' style="background-color:#a5caf6">
	<div class="row">
		<div class="span2"><img src="bukutamu/user/user<?=rand(1,4)?>.png"
			class='img-polaroid' alt=""></div>
		<div class="span3">
			<p><? echo $rows -> nama; ?></p>
          	<p><? echo $rows -> pesan; ?></p>
			<span class=" badge badge-warning"><?php echo tampil_tanggal($rows -> tanggal); ?></span> 
		</div>
	</div>
	</div>
	<p></p>

		<? $no++;
		}
	?>
<div class='clearfix'></div>
<div class='pagination'> <ul>	
<?php
	//=============CUT HERE for paging====================================
	$tampil2 = mysql_query("select idbukutamu from bukutamu");
	$jmldata = mysql_num_rows($tampil2);
	$jumlah_halaman = ceil($jmldata / $batas);

	for ($i = 1; $i <= $jumlah_halaman; $i++)

		echo "<li><a href='index.php?mod=bukutamu&pg=bukutamu_uview&halaman=$i'>$i</a></li>";
?>
</ul>
</div>





