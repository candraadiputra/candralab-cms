<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
function menu($sessi){
	switch($sessi){
		case 'admin': {
	

?>
<div class=" well sidebar-nav" >
	<ul class="nav nav-tabs nav-stacked ">
		<li class="nav-header">
			Menu
		</li>
		<li>
			<a href="index.php?mod=login&pg=welcome"  title="Halaman Depan"><i class='icon-home'></i>Home</a>
		</li>

		<li class="nav-header">
			Content
		</li>
		<li>
			<a href="index.php?mod=halaman&pg=halaman_view"> <i class='icon-calendar'></i>Halaman</a>
		</li>
		<li>
			<a href="index.php?mod=berita&pg=berita_view"> <i class='icon-calendar'></i>Berita</a>
		</li>
		<li>
			<a href="index.php?mod=galeri&pg=galeri_view"> <i class='icon-camera'></i>Galeri </a>
		</li>
		<li>
			<a href="index.php?mod=bukutamu&pg=bukutamu_view"> <i class='icon-camera'></i>Bukutamu </a>
		</li>
		<li>
			<a href="index.php?mod=links&pg=links_view"> <i class='icon-list'></i>Links </a>
		</li>

		<li class="nav-header">
			Admin
		</li>
		<li>
			<a href="index.php?mod=admin&pg=admin_view"><i class='icon-user'></i> Admin</a>
		</li>

	</ul>
</div>
<? }
	break;

	

	default:
	{
?>
<div class="  sidebar-nav" >
	<ul class="nav nav-tabs nav-stacked	 ">

		<li class="nav-header">
			Berita
		</li>
		<?php list_berita(10); ?>
	</ul>
	<div class="widget">

	</div>

</div>

<?
} //end of case no login;
} //end of switch
} //end of function
