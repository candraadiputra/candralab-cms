<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */


	$aksi = null;
	if(isset($_GET['id'])) {
		$aksi = "edit";
		$id = $_GET['id'];
		//baris dibawah ini disesuaikan dengan nama tabel dan idtabelnya
		$sql = "select * from halaman where idhalaman='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
		$baris = mysql_fetch_object($result);

	} else {
		$aksi = "tambah";
	}?>
	<script type="text/javascript" src="assets/js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src='assets/js/editor.js'></script> 

<form  class="form-horizontal" method="POST" id="form1" action="halaman/halaman_action.php" enctype="multipart/form-data">
 <legend>  halaman</legend>
	<input type='hidden' name='id' value="<?=$id?>">
  <div class="control-group">
    <label class="control-label" for="judul">judul</label>
    <div class="controls">
      <input type="text" name='judul' id="judul" class='input-xxlarge'
      value='<?=$baris->judul;?>' >
    </div>
   </div>
    
  <div class="control-group">
    <label class="control-label" for="gambar">Gambar</label>
    <div class="controls">
      <input type="file" name='gambar' id="gambar"
       >
    </div>
   </div>
   <div class="control-group">
    <label class="control-label" for="isi">isi</label>
    <div class="controls">
      <textarea name='isi'  rows="20" class='input-xxlarge'><?=$baris->isi;?> </textarea>
     
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
     
      <button type="submit" class="btn btn-success" name='aksi'value=<?=$aksi?> ><?=$aksi?></button>
    </div>
  </div>
</form>

<div id="form1_errorloc"  class="text-error"></div>
