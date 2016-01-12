<?php
 /* 
 *//* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
?>

			<form method="POST" id="form1" class='form-horizontal' action="login/login_action.php">
			
		
					<legend>
						Login  <?=$_GET['t']?>
					</legend>
			<div class="control-group">
		<label class="control-label" for="nama">username</label>
		<div class="controls">
					<input type='hidden' name='tipe' value="<?=$_GET['t']?>">
			<input   type="text" name='username' class="required ">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="nama">Password</label>
		<div class="controls">
			<input   type="password" name='password' class="required">
		</div>
	</div>
				
					<div class="row">
						<div class="span4 offset2">
						<input type="submit"  name="login" class="btn btn-primary" value='login'>
						
					</div>
					</div>
			
			</form>
			
	<div id="form1_errorloc" style="color:#ff0000">
		<? 
		if(isset($_GET['s'])){
			echo "Login Gagal, cek kembali username dan password anda!";
		}
		?>
	</div>

	

