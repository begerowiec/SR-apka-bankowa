<?php

$adres_www="http://www.kupers.pl";
$upload="/home/kuperspl/domains/kupers.pl/public_html/";

//-------------
require_once("mysql.php");
class Mysql {

var $h; //uchwyt bazy
var $tabela; //nazwa tabeli wybranej 
var $wynik=Array(); //tablica z wynikami pojedynczego zapytania
var $error; //pole zawierajace ewentualne bledy!

 //konstruktor inicjujacy polaczenie z baza
 function Mysql($adres='localhost',$login='root',$haslo='',$baza='bankapk') {
   $this->h=mysql_connect($adres,$login,$haslo);
   mysql_select_db($baza);
 	mysql_query("set names latin2");
   
 }


 //metoda dla zapytania z WHERE
 function sql_result($str) {
  $wyk=mysql_query($str);
  $ww=mysql_fetch_array($wyk);
  $this->wynik=$ww;
 }


 function sql_query($str) {
   if (!$wyk=mysql_query($str)) $this->error=mysql_error();
 }


 //zamykanie polaczenia z baza
 function sql_close() {
   mysql_close($this->h);
 }

}

?>