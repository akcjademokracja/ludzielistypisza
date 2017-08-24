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

function bbCode($tekst) {
	$tekst=stripslashes($tekst);
	$tekst = nl2br($tekst);
	$tekst = preg_replace("#\[b\](.*?)\[/b\]#si",'<b>\\1</b>',$tekst);
$tekst = preg_replace("#\[i\](.*?)\[/i\]#si",'<i>\\1</i>',$tekst);
$tekst = preg_replace("#\[u\](.*?)\[/u\]#si",'<u>\\1</u>',$tekst); 
$tekst = preg_replace("#\[s\](.*?)\[/s\]#si",'<s>\\1</s>',$tekst);
$tekst = preg_replace("#\[url=(http.*?)\](.*?)\[/url\]#si", "<A HREF=\"\\1\" TARGET=\"_blank\">\\2</A>", $tekst);
//odnośnik www - dodaje http
$tekst = preg_replace("#\[url\](.*?)\[/url\]#si", "<A HREF=\"http://\\1\">\\1</A>", $tekst);
$tekst = preg_replace("#http://www.*? #si", "<A HREF=\"http://www.\\1\">\\1</A>", $tekst);
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

// The Text you want to filter for urls
 
// Check if there is a url in the text
if(preg_match($reg_exUrl, $tekst, $url)) { 
       // make the urls hyper links
	  $tekst = preg_replace("@(http?://([-\w\.]+)+(:\d+)?(/([\w/_\.%]*(\?\S+)?)?)?)@", "<A HREF=\"$1\">$1</A> ", $tekst);
/*
 $urlik=str_replace('http://', '',$url[0]); 
       $tekst=preg_replace($reg_exUrl, "<a href='".$url[0]."'>".$urlik."</a> ", $tekst);*/
} else { 
$reg_exUrl = "/(www.)[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

// The Text you want to filter for urls
 
// Check if there is a url in the text
if(preg_match($reg_exUrl, $tekst, $url)) { 
       // make the urls hyper links
 
      $tekst=preg_replace("@(www?([-\w\.]+)+(:\d+)?(/([\w/_\.%]*(\?\S+)?)?)?)@", "<A HREF=\"http://$1\">$1</A> ", $tekst);
};

};
//odnośnik www - dodaje http
$tekst = preg_replace("#\[url=(.*?)\](.*?)\[/url\]#si", "<A HREF=\"http://\\1\">\\2</A>", $tekst); 

return $tekst; 
};

 
  function txtToJson($tekst) { 
   $tekst=trim($tekst); 

 $tekst=htmlspecialchars($tekst); 
	$tekst = nl2br($tekst);
 $tekst = str_replace(chr(10), "", $tekst);
 $tekst = str_replace(chr(13), "", $tekst);

 	$tekst=str_replace(array('<br />'), '', $tekst);
$tekst=str_replace(array("<br/>", '\/','\\', '\'','`', '\\r', '\\n', "\\\\", "<", "!", ":", ")", "("), ' ', $tekst);
$tekst=str_replace(array('"', "”", '\"'), '\"', $tekst);
/*

    $search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
    $replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");

    $tekst=str_replace($search, $replace, $tekst);
*/
    
    $tekst=trim($tekst); 

return $tekst;
};


?>