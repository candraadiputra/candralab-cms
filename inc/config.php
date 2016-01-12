<?php
/* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013 
 */
 
/* konfigurasi database */
/* ganti konfigurasi seusai dengan databasenya */
	
	define('db_host','localhost');
	define('db_user','root');
	define('db_pass','');
	define('db_name','candralabcms');
	
	mysql_connect(db_host,db_user,db_pass);
	mysql_select_db(db_name);
	
?>
