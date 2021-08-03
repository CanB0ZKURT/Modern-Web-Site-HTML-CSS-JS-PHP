<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="can_bozkurt";

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan)
{
    die("Veritabanı bağlantı işlemi başarısız.".mysqli_connect_error());
}

?>