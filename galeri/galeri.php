<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
 ?>
<script type="text/javascript" src="assets/fb/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/fb/jquery.fancybox.css" media="screen" />
	<script type="text/javascript">
	$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();
		});
	</script>

	<h2 id="headings">  galeri</h2>

<br/>
	
		<?php
				//bata paging 
	$batas=8;
$halaman=$_GET['halaman'];
$posisi=null;
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}else{
	$posisi=($halaman-1)* $batas;
}
		

			
$query="SELECT * from galeri limit $posisi,$batas ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){
?>
<a class="fancybox" href='upload/galeri/<?=$rows->foto;?>' data-fancybox-group="gallery"  title="<?=$rows->keterangan;?>">
	 <img class="img-polaroid" src='upload/galeri/<?=$rows->foto;?>'  width='150' height='150' alt="" /></a>


<?php

}

//=============CUT HERE for paging====================================
$tampil2=mysql_query("select no from galeri");
$jmldata=mysql_num_rows($tampil2);
$jumlah_halaman=ceil($jmldata/$batas);

echo "<div class='pagination'> <ul>";
for($i=1;$i<=$jumlah_halaman;$i++) 

echo "<li><a href='index.php?mod=galeri&pg=thumbnail_view&halaman=$i'>$i</a></li>";

;
?>
</ul>
</div>
<br>Jumlah data :<?=$jmldata;?>


