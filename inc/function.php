<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013
 */
function query($qry) {
	$result = mysql_query($qry) or die("Gagal melakukan query pada :
	 <br>$qry<br><br>Kode Salah : <br>&nbsp;&nbsp;&nbsp;" . mysql_error() . "!");
	return $result;
}

function get_selisih_hari($awal, $akhir) {
	$startTimeStamp = strtotime($awal);
	$endTimeStamp = strtotime($akhir);

	$timeDiff = abs($endTimeStamp - $startTimeStamp);

	$numberDays = $timeDiff / 86400;
	// 86400 seconds in one day

	// and you might want to convert to integer
	$numberDays = intval($numberDays);
	return $numberDays;
}

function show_foto($foto) {
	if (empty($foto)) {
		echo "default.png";
	} else {
		echo $foto;
	}
}

function arrayToObject($array) {
	if (!is_array($array)) {
		return $array;
	}

	$object = new stdClass();
	if (is_array($array) && count($array) > 0) {
		foreach ($array as $name => $value) {
			$name = strtolower(trim($name));
			if (!empty($name)) {
				$object -> $name = arrayToObject($value);
			}
		}
		return $object;
	} else {
		return FALSE;
	}
}

function fetch_row($qry) {
	$tmp = query($qry);
	list($result) = mysql_fetch_row($tmp);
	return $result;
}

function list_halaman() {

	$query = query("SELECT idhalaman,judul   FROM halaman ");
	while ($row = mysql_fetch_row($query)) {

		echo "<li><a href='index.php?mod=halaman&pg=halaman_detail&id=" . $row[0] . "'>" . ucwords($row[1]) . "</a> </li>";

	}
}

function list_berita($limit) {

	$query = query("SELECT *   FROM berita  order by idberita desc limit $limit ");
	while ($row = mysql_fetch_row($query)) {

		echo "<li><a href='index.php?mod=berita&pg=berita_detail&id=" . $row[0] . "'>
		<i class='icon-globe'></i>" . ucwords($row[1]) . "</a> </li>";

	}
}

function list_links() {

	$query = query("SELECT *   FROM links order by nama ");
	while ($row = mysql_fetch_row($query)) {

		echo "<li><a href='.$row[0].' target='_blank' ><i class='icon-globe'></i>" . ucwords($row[1]) . "</a> </li>";

	}
}

function get_today() {
	$today = date("Y-m-d");
	return $today;
}

function format_rupiah($rp) {
	$hasil = "<b>Rp." . number_format($rp, 0, "", ".") . ",00</b>";
	return $hasil;
}

function pagination2($halaman, $jumlah_halaman, $mod, $pg) {
	$baselink = "index.php?mod=" . $mod . "&pg=" . $pg . "&halaman=";
	if ($halaman > 1) {
		$previous = $halaman - 1;
		echo "<li><a href='" . $baselink . "1'><i class='icon-fast-backward'></i></a></li>";
		echo "<li><a href='" . $baselink . $previous . "'><i class='icon-step-backward'></i></a></li>";
	} else {
		echo "<li><a href=''><i class='icon-fast-backward'></i></a></li><li><a href=''><i class='icon-step-backward'></i></a></li>";
	}

	$angka = ($halaman > 3) ? "<li><a href=''>...</a></li>" : " ";
	for ($i = $halaman - 2; $i < $halaman; $i++) {
		if ($i < 1)
			continue;
		$angka .= "<li><a href='" . $baselink . $i . "'>" . $i . "</a></li>";
	}
	$angka .= "<li> <a href='' class='btn btn-primary'>" . $halaman . "</a></li>";
	for ($i = $halaman + 1; $i < $halaman + 3; $i++) {
		if ($i > $jumlah_halaman)
			break;
		$angka .= "<li><a href='" . $baselink . $i . "'>" . $i . "</a></li>";
	}
	$angka .= ($halaman + 2 < $jumlah_halaman ? "<li><a href=''>...</a></li>
	<li><a href='" . $baselink . $jumlah_halaman . "'>$jumlah_halaman</a></li>" : "");
	echo $angka;

	if ($halaman < $jumlah_halaman) {
		$next = $halaman + 1;
		echo "<li><a href='" . $baselink . $next . "'><i class='icon-step-forward'></i></a></li>";
		echo "<li><a href='" . $baselink . $jumlah_halaman . "'><i class='icon-fast-forward'></i></a></li>";
	} else {
		echo "<li>	<a href=''><i class='icon-step-forward'></i></a></li><li><a href=''> <i class='icon-fast-forward'></i></a></li>";
	}

}

//paging v2
function pagination($halaman, $jumlah_halaman, $tabel) {
	$baselink = "index.php?mod=" . $tabel . "&pg=" . $tabel . "_view&halaman=";
	if ($halaman > 1) {
		$previous = $halaman - 1;
		echo "<li><a href='" . $baselink . "1'><i class='icon-fast-backward'></i></a></li>";
		echo "<li><a href='" . $baselink . $previous . "'><i class='icon-step-backward'></i></a></li>";
	} else {
		echo "<li><a href=''><i class='icon-fast-backward'></i></a></li><li><a href=''><i class='icon-step-backward'></i></a></li>";
	}

	$angka = ($halaman > 3) ? "<li><a href=''>...</a></li>" : " ";
	for ($i = $halaman - 2; $i < $halaman; $i++) {
		if ($i < 1)
			continue;
		$angka .= "<li><a href='" . $baselink . $i . "'>" . $i . "</a></li>";
	}
	$angka .= "<li> <a href='' class='btn btn-primary'>" . $halaman . "</a></li>";
	for ($i = $halaman + 1; $i < $halaman + 3; $i++) {
		if ($i > $jumlah_halaman)
			break;
		$angka .= "<li><a href='" . $baselink . $i . "'>" . $i . "</a></li>";
	}
	$angka .= ($halaman + 2 < $jumlah_halaman ? "<li><a href=''>...</a></li>
	<li><a href='" . $baselink . $jumlah_halaman . "'>$jumlah_halaman</a></li>" : "");
	echo $angka;

	if ($halaman < $jumlah_halaman) {
		$next = $halaman + 1;
		echo "<li><a href='" . $baselink . $next . "'><i class='icon-step-forward'></i></a></li>";
		echo "<li><a href='" . $baselink . $jumlah_halaman . "'><i class='icon-fast-forward'></i></a></li>";
	} else {
		echo "<li>	<a href=''><i class='icon-step-forward'></i></a></li><li><a href=''> <i class='icon-fast-forward'></i></a></li>";
	}

}

function num_rows($qry) {
	$tmp = query($qry);
	$jum = mysql_num_rows($tmp);
	return $jum;
}

function valid($tmp) {
	return htmlentities(addslashes($tmp));
}

//fungsi untuk meremove koma didepan dan dibelakang
function rm_koma($data) {
	$ret = substr($data, 0, -1);

	return $ret;
}

function code_lolos($id) {
	if ($id == 'N/A') {
		return '0';
	} else if ($id == 'gagal') {
		return '1';
	} else if ($id == 'lolos') {
		return '2';
	}
}

function combo_hari($kode) {
	echo "<option value='0' selected>-  hari -</option>";
	$hari = array('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu');
	foreach ($hari as $value) {
		if ($kode == "")
			echo "<option value='$value'> " . ucwords($value) . " </option>";
		else
			echo "<option value='$value'" . selected($value, $kode) . "> " . ucwords($value) . " </option>";
	}
}

function combo_bulan($kode) {
	echo "<option value='' selected>Bulan</option>";
	$hari = array('Januari', 'Febuari', 'maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
	foreach ($hari as $key => $value) {
		if ($kode == "")
			echo "<option value='$key'> " . ucwords($value) . " </option>";
		else
			echo "<option value='$key'" . selected($value, $kode) . "> " . ucwords($value) . " </option>";
	}
}

function combo_tahun($kode) {
	echo "<option value='' selected>Tahun</option>";
	$tahun = array('2011', '2012', '2013');
	foreach ($tahun as $key => $value) {
		if ($kode == "")
			echo "<option value='$value'> " . ucwords($value) . " </option>";
		else
			echo "<option value='$value'" . selected($value, $kode) . "> " . ucwords($value) . " </option>";
	}
}

function konversi_bulan($bln) {
	switch($bln) {
		case "1" :

		case "01" :
			$bulan = "Januari";
			break;
		case "2" :

		case "02" :
			$bulan = "Februari";
			break;
		case "3" :

		case "03" :
			$bulan = "Maret";
			break;
		case "4" :

		case "04" :
			$bulan = "April";
			break;
		case "5" :

		case "05" :
			$bulan = "Mei";
			break;
		case "6" :

		case "06" :
			$bulan = "Juni";
			break;
		case "7" :

		case "07" :
			$bulan = "Juli";
			break;
		case "8" :

		case "08" :
			$bulan = "Agustus";
			break;
		case "9" :

		case "09" :
			$bulan = "September";
			break;
		case "10" :
			$bulan = "Oktober";
			break;
		case "11" :
			$bulan = "November";
			break;
		case "12" :
			$bulan = "Desember";
			break;
		default :
			$bulan = "-";
	}
	return $bulan;
}

function konversi_tanggal($time) {
	list($thn, $bln, $tgl) = explode('-', $time);
	$tmp = $tgl . " " . konversi_bulan($bln) . " " . $thn;
	return $tmp;
}

function tampil_tanggal($time) {
	list($date, $time) = explode(' ', $time);
	$tmp = konversi_tanggal($date) . " " . $time;
	return $tmp;
}

function selected($t1, $t2) {
	if (trim($t1) == trim($t2))
		return "selected";
	else
		return "";
}

function get_date($tgl = '') {
	if ($tgl == "")
		$now = date("d");
	else
		$now = $tgl;
	$jum_hr = date("t");
	for ($i = 1; $i <= $jum_hr; $i++) {
		echo "<option value='$i' " . selected($i, $now) . ">$i</option>";
	}
}

function get_month($bln = '') {
	if ($bln == "")
		$now = date("m");
	else
		$now = $bln;
	$jum_bl = 12;
	for ($i = 1; $i <= $jum_bl; $i++) {
		echo "<option value='$i' " . selected($i, $now) . ">" . konversi_bulan($i) . "</option>";
	}
}

function get_year($thn = '') {
	if ($thn == "") {
		$now = date("Y");
		$thn = date("Y");
	} else {
		$now = date("Y");
		$thn = $thn;
	}
	$jum_th = 3;
	for ($i = 1; $i <= $jum_th; $i++) {
		echo "<option value='$now' " . selected($thn, $now) . ">" . $now . "</option>";
		$now--;
	}
}
?>
