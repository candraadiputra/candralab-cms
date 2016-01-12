<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
$rule = $_SESSION['tipe'];
?>
<h4>Halaman  <?=$rule;?></h4>
<p> Selamat datang <?=$_SESSION['nama']?></p>
<!--admin-->
<?php
if($rule=='admin'){
?>
<div>
	<ul>
		<li class="span2 ">
			<div class="thumbnail">
				<img src="assets/ico/page.jpg" alt="">
				<div class="caption">
					<p style="text-align: center">
						<a href="index.php?mod=halaman&pg=halaman_view" class="btn btn-primary  btn-small">halaman</a>
					</p>
				</div>
			</div>
		</li>
		<li class="span2 ">
			<div class="thumbnail">
				<img src="assets/ico/press.png" alt="">
				<div class="caption">
					<p style="text-align: center">
						<a href="index.php?mod=berita&pg=berita_view" class="btn btn-primary  btn-small">berita</a>
					</p>
				</div>
			</div>
		</li>
		<li class="span2 ">
			<div class="thumbnail">
				<img src="assets/ico/galeri.jpg" alt="">
				<div class="caption">
					<p style="text-align: center">
						<a href="index.php?mod=galeri&pg=galeri_view" class="btn btn-primary  btn-small">Galeri</a>
					</p>
				</div>
			</div>
		</li>
		<li class="span2 ">
			<div class="thumbnail">
				<img src="assets/ico/gb.jpg" alt="">
				<div class="caption">
					<p style="text-align: center">
						<a href="index.php?mod=bukutamu&pg=bukutamu_view" class="btn btn-primary  btn-small">Guestbook</a>
					</p>
				</div>
			</div>
		</li>
	
		
		
	</ul>
</div>
<?
}else if($rule=='siswa'){
?>
<div>
	<ul>
		<li class="span2 ">
			<div class="thumbnail">
				<img src="assets/ico/jadwal.jpg" alt="">
				<div class="caption">
					<p style="text-align: center">
						<a href="index.php?mod=plan&pg=plan_view" class="btn btn-primary  btn-small">Laporan Nilai</a>
					</p>
				</div>
			</div>
		</li>
		<li class="span2 ">
			<div class="thumbnail">
				<img src="assets/ico/user_comment.png" alt="">
				<div class="caption">
					<p style="text-align: center">
						<a href="index.php?mod=user&pg=profil" class="btn btn-primary  btn-small">Profile</a>
					</p>
				</div>
			</div>
		</li>
	</ul>
</div>
<?php
}
?>

