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
	
</style>

<div class="row offset1">
<?php
$id=$_GET['id'];
$query=" SELECT * from halaman where idhalaman='$id'";


$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){
?>

    <div class="row">
      <div class="span8">
        <h2> <strong><a href="index.php?mod=halaman&pg=halaman_detail&id=<?=$rows->idhalaman?>">
        	<?=$rows->judul?></a></strong></h2>
        	 <span class="label label-success"><?=$rows ->tanggal;?></span>
      </div>
    </div>
    <div class="row">
      <div class="span9" style="text-align: center">
      		<?php
      		if(!empty($rows->gambar)){
      		?>
            <img src="upload/halaman/<?=show_foto($rows->gambar)?>" class='img-polaroid'>
       	<?php } ?>
      </div>
    
      <div class="span9">      
        <p class='rata'>
        	
      <?=$rows->isi?>
        </p>
      
      </div>
      
    </div>
	

 
<?
}
?>

</div>	
