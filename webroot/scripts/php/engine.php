<?php
 
function linkTitle($tekst) {
	$tekst=trim($tekst);
	$tekst=mb_strtolower($tekst, 'UTF-8');
		$tekst=str_replace(array('...'), '', $tekst);
	$tekst=str_replace(array(' ','&','-','/','@', '_', ',','.','(',')', '!', ':'), '_', $tekst);
	$tekst=str_replace(array('/','\\', '–', '+','\'','`','%', '"', '?'), '', $tekst);


	return _no_pl(mb_strtolower($tekst, 'UTF-8'));
};
function linkTitle1($tekst, $ilosc) {
	$tekst1=wordwrap($tekst, $ilosc, "&nbsp;<br/>&nbsp;");
	 
	return $tekst1;
};

function _no_pl($tekst)
{
   $tabela = Array( 
   //WIN
    "ó" => "o", "+" => "", "Ę" => "E", "ę" => "e", "Ó" => "O","Ó" => "O", "Ą" => "a",
	"ą" => "a", "Ś" => "S","ś" => "s", "Ł" => "L","ł" => "l", "Ź" => "Z",
	"ź" => "z", "Ż" => "Z","ż" => "z", "Ć" => "C","ć" => "c", "Ń" => "N",
	"ń" => "n","ä" => "a","ô" => "o","ù" => "u","é" => "e","'" => "","/" => "",
   );

   return strtr($tekst,$tabela);
}
?>