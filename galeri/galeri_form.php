<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
 ?>
<form  class="form-horizontal" method="POST" id="form1" enctype="multipart/form-data"
action="galeri/galeri_action.php">
 <legend>  foto</legend>
	<input type='hidden' name='id' value="<?=$id?>">
	

  <div class="control-group">
    <label class="control-label" for="foto_">foto</label>
    <div class="controls">
      <input type="file" name='foto' 
      value=<?=$baris->foto;?> >
    </div>
  </div>
    <div class="control-group">
    <label class="control-label" for="">Keterangan foto</label>
    <div class="controls">
      <textarea name='keterangan'></textarea>
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
     
      <button type="submit" class="btn btn-success" name='aksi'value="upload"> Upload</button>
    </div>
  </div>
</form>
<script language="javaScript" type="text/javascript"
xml:space="preserve">//You should create the validator only after the definition of the HTML form
	var f = new Validator("form1");
	f.EnableOnPageErrorDisplaySingleBox();
	f.EnableMsgsTogether();

	f.addValidation("foto", "req", "File belum dipilih");
</script>
<div id="form1_errorloc"  class="text-error">
<?php		
// KODE UNTUK MENAMPILKAN PESAN STATUS
if(isset($_GET['status'])) {
	if($_GET['status'] == 1) {
		echo " Ukuran file terlalu besar, file maximal 100kb";
	} else {
		echo "Format gambar yang diperbolehkan hanya jpg";
	}
}
?>
</div>
