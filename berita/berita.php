<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
 ?>
<style type="text/css">
.rata{
	text-align:justify;
	margin-left:10px;
	
</style>
<h2> Berita Terbaru </h2>
	<form id='form1' action='index.php?mod=berita&pg=berita' method="POST">
	<input type='text'  name='qcari' class="required input-xxlarge" placeholder="cari berita " >
	<input type='submit'  class='btn btn-success' value='cari'>
	<a href='index.php?mod=berita&pg=berita' class="btn" ><i class='icon-list'></i>All</a>

</form>	
<div class="row">
	<div class='span10 offset1'>
	
<?php

$batas='5';

$berita=$_GET['berita'];
$posisi=null;
if(empty($berita)){
$posisi=0;
$berita=1;
}else{
$posisi=($berita-1)* $batas;
}
$query=" SELECT * from berita 
 order by tanggal desc limit $posisi,$batas  ";
$sqlpage="SELECT * from berita";


if(isset($_POST[qcari])){
	$qcari=$_POST['qcari'];
	$query="SELECT * from berita where 
	judul like  '%$qcari%'
	";
}
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){
?>
   
 
    <div class="row">
      <div class="span8">
        <h4> <strong><a href="index.php?mod=berita&pg=berita_detail&id=<?=$rows->idberita?>">
        	<?=$rows->judul?></a></strong></h4>
      </div>
    </div>
    <div class="row">
      <div class="span2">
        <a href="#">
         
            <img src="upload/berita/<?=show_foto($rows->gambar)?>" class='img-polaroid'>
       
        </a>
      </div>
		 <div class="span8">
        <p class='rata'>
        	 <span class="label label-success"><?=tampil_tanggal($rows ->tanggal);?></span>
      <?=substr($rows->isi,0,300)?><a href="index.php?mod=berita&pg=berita_detail&id=<?=$rows->idberita?>" class='btn btn-primary btn-mini'>selengkapnya</a>
        </p>
     </div>
  
      
    </div>
	

 
<?
}

//=============CUT HERE for paging====================================
$tampil2 = mysql_query($sqlpage) or die(mysql_error());

$jmldata = mysql_num_rows($tampil2);
$jumlah_berita = ceil($jmldata / $batas);
?>
<div class='clearfix'>
	
</div>
<div class='pagination'> <ul>;
	<?
for($i=1;$i<=$jumlah_berita;$i++) 

echo "<li><a href='index.php?mod=web&pg=berita&berita=$i'>$i</a></li>";


?>
</ul>
</div>
</div>	
</div>