<?php

$username="root";
$password="";
$sunucu="localhost";
$veritabani="obs";


/* Bağlantıyı Başlat */
$baglan = new mysqli($sunucu, $username, $password,$veritabani);/* Bağlantıyı Kontrol Et */
if($baglan->connect_errno>0)
{
	die("<b>Bağlantı hatası:<b>".$baglan->connect_error);
}

	## Karakter Sorunu ##
	$baglan->set_charset("utf8");

?>