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
					$sql = "select * from berita where idberita='$id' ";
					$result = mysql_query($sql) or die(mysql_error());
					$baris = mysql_fetch_object($result);

				} else {
					$aksi = "tambah";
				}?>

<form  class="form-horizontal" method="POST" id="form1" enctype="multipart/form-data" action="bukutamu/bukutamu_action.php">
	<legend>
		silahkan isi buku Tamu
	</legend>
	<input type='hidden' name='id' value="<?=$id?>">
	<div class="control-group">
		<label class="control-label" for="nama">nama</label>
		<div class="controls">
			<input type="text" name='nama' id="nama"
			value='<?=$baris -> nama;?>' >
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="nama">Email</label>
		<div class="controls">
			<input type="text" name='email'
			value='<?=$baris -> email;?>' >
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="pesan">pesan</label>
		<div class="controls">
			<textarea name='pesan' class='input-xxlarge'  ><?=$baris -> pesan;?> </textarea>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-success" name='aksi'value=<?=$aksi?> >
				Kirim
			</button>
		</div>
	</div>
</form>

