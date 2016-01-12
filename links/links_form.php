<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
 
	include ('inc/config.php');
	$aksi = null;
	if(isset($_GET['id'])) {
		$aksi = "edit";
		$id = $_GET['id'];
		//baris dibawah ini disesuaikan dengan nama tabel dan idtabelnya
		$sql = "select * from links where idlinks='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
		$baris = mysql_fetch_object($result);

	} else {
		$aksi = "tambah";
	}?>

<form  class="form-horizontal" method="POST" id="form1" action="links/links_action.php">
 <legend>  <?=$aksi?> links</legend>
	<input type='hidden' name='id' value="<?=$id?>">

  <div class="control-group">
   <label class="control-label" for="nama">nama Web</label>
    <div class="controls">
         <input type="text" name='nama' class="required" 
      value='<?=$baris->nama;?>' > 
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="url">url</label>
    <div class="controls">
         <input type="text" name='url' value='<?=$baris->url;?>' class="required" minlength="5"
      >    
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
     
      <button type="submit" class="btn btn-success" name='aksi'value=<?=$aksi?> ><?=$aksi?></button>
    </div>
  </div>
</form>

