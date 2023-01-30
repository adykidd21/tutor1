<?php
echo 'HEllo word <br> aaaa bbbb';

$db_connection = pg_connect("host=postgres_host dbname=webapp_db user=nano");
if($db_connection){
 	echo 'Konecksi ke database berhasil';
} else {
	echo 'Koneksi ke database gagal';
}
?>