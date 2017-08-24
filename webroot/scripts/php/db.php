<?php 

 
$b2za=mysqli_connect(ADRES,UZYTKOWNIK,HASLO_DO_BAZY,BAZA);
mysqli_query($b2za,"SET NAMES utf8;");
mysqli_query($b2za, "SET lc_time_names = 'pl_PL'")?>