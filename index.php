<html>

<head>

<title>Pomeranian Beauties</title>

<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta http-equiv=Content-Language content=pl>
<meta name="Keywords" content="psy, pies, suka, suki, Pomeranian, Beauties, cavalier, king, charles, spaniel, Pomeranian Beauties, cavaliery, Xandra, Kentucky Joe, Papa Joe, Sanka, Avanti, Norma Jean, Norma, Silver Woman, Silly, Silka, Danny, Fever My Hope, krycie, szczenięta, szczeniaki">

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" href="pbico.jpg">
<!--
<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.pomeranian.ovh.org/rsspl.xml">
-->
</head>

<body bgcolor="#<?
 if (isset ($_GET['ver'])) echo("E0E0E0");
 else echo("404040");
?>">

<?

if (isset ($_GET['ver'])) $ver=$_GET['ver'];
else $ver="";
if (isset ($_GET['dog'])) $dog=$_GET['dog'];
else $dog="";
if (isset ($_GET['opt'])) $opt=$_GET['opt'];
else $opt="";
if (isset ($_GET['foto'])) $foto=$_GET['foto'];
else $foto="";

writeSite($ver, $opt, $dog, $foto);

function writeSite ($ver, $opt, $dog, $foto)

{

switch ($ver)

{

case "":

print("

<div class=\"welcome\">

<center>

<font size = \"4\" color=\"yellow\">Witamy na stronie hodowli Pomeranian Beauties!</font><br />
<font size = \"4\" color=\"yellow\">Herzlich wilkommen bei den Pomeranian Beauties!</font><br />
<font size = \"4\" color=\"yellow\">Welcome to the Pomeranian Beauties!</font><br /><br />

<img src=\"norma_small.jpg\" alt=\"\"><br />
<a href=\"http://www.kostgallery.com/\"><font size = \"2\" color=\"white\"><i>rys. Joanna Kost</i></font></a><br /><br />

<a href=\"index.php?ver=1\"><img src=\"polski2.gif\" style=\"border:0\" alt=\"\"></a>&nbsp;&nbsp;&nbsp;<a href=\"index.php?ver=2\"><img src=\"deutsch2.gif\" style=\"border:0\" alt=\"\"></a>&nbsp;&nbsp;&nbsp;<a href=\"index.php?ver=3\"><img src=\"english2.gif\" style=\"border:0\" alt=\"\"></a><br /><br />

</center>

</div>

");

break;

case "1":

print ("
	
	<div class=\"content\">

	<div class=\"top\">

		<div class=\"data\">
			<center>Data aktualizacji:<br>

");			

if (file_exists("datemod_p.php")) include ("datemod_p.php");

print ("

		</center></div>

		<div class=\"kontakt\">
			<center><a href=\"mailto:Pomeranian Beauties <ewaiwitek@poczta.fm>\"><font color=\"navy\" size=6>
			E-m@il</font></a></center>
		</div>

		<center>
		<font size=8>&nbsp;&nbsp;Pomeranian Beauties (FCI)</font><br /><br />
		<font size=6>&nbsp;&nbsp;&nbsp;Cavalier King Charles' Spaniel</font>
		</center>

	</div>
	");
	
switch ($dog) 

{

case "":

print ("

	<div class=\"menu_poziome\" id=\"glowna\">
		<center><a href=\"index.php?ver=1\"><b>Strona główna</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"pierwszy\">
		<center><a href=\"index.php?ver=2\"><img src=\"deutsch.gif\" style=\"border:0\" alt=\"\">
		<b> Deutsch </b><img src=\"deutsch.gif\" style=\"border:0\" alt=\"\"></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"drugi\">
		<center><a href=\"index.php?ver=3\"><img src=\"english.gif\" style=\"border:0\" alt=\"\">
		<b> English </b><img src=\"english.gif\" style=\"border:0\" alt=\"\"></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"trzeci\">
		&nbsp;
	</div>

	<div class=\"menu_poziome\" id=\"czwarty\">
		&nbsp;
	</div>
	
	");
	
switch ($opt) 

{

case "":

if (file_exists('./index_p.php')) include ('./index_p.php');
	
break;	

case "1":

if (file_exists('./news_p.php')) include ('./news_p.php');

break;

case "2":

if (file_exists('./about_p.php')) include ('./about_p.php');
	
break;

case "3":

if (file_exists('./guestbook_p.php')) include ('./guestbook_p.php');
	
break;

case "4":

if (file_exists('./links_p.php')) include ('./links_p.php');
 
 break;

case "5":

if (file_exists('./album_p.php')) include ('./album_p.php');
 
 break;

case "6":

if (file_exists('./contact_p.php')) include ('./contact_p.php');
 
 break;

case "7":

if (file_exists('./rainbow_p.php')) include ('./rainbow_p.php');
 
 break;

case "8":

if (file_exists('./veterans_p.php')) include ('./veterans_p.php');
 
 break;
	
}

break;	

default:

	if ($dog=="7") $imie="puppies/puppies";
	elseif ($dog=="15") $imie="clara";
	elseif ($dog=="16") $imie="unia";
	elseif ($dog=="17") $imie="tintin";
	elseif ($dog=="18") $imie="maciek";
	elseif ($dog=="19") $imie="tini";
	elseif ($dog=="20") $imie="amon";
	elseif ($dog=="21") $imie="sasha";
	
	if ($dog != "7") print ("

	<div class=\"menu_poziome\" id=\"glowna\">
		<center><a href=\"index.php?ver=1\"><b>Strona główna</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"pierwszy\">
		<center><a href=\"index.php?ver=1&dog=$dog&opt=1\"><b>O psie</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"drugi\">
		<center><a href=\"index.php?ver=1&dog=$dog&opt=2\"><b>Rodowód</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"trzeci\">
		<center><a href=\"index.php?ver=1&dog=$dog&opt=3\"><b>Galeria</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"czwarty\">
		<center><a href=\"index.php?ver=1&dog=$dog&opt=4\"><b>Wystawy</b></a></center>
	</div>
	
	");
	
	else print ("

	<div class=\"menu_poziome\" id=\"glowna\">
		<center><a href=\"index.php?ver=1\"><b>Strona główna</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"pierwszy\">
		<center><a href=\"index.php?ver=1&dog=$dog&opt=1\"><b>Rodzice</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"drugi\">
		<center><a href=\"index.php?ver=1&dog=$dog&opt=2\"><b>Rodowód</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"trzeci\">
		<center><a href=\"index.php?ver=1&dog=$dog&opt=3\"><b>Galeria</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"czwarty\">
		<center><a href=\"index.php?ver=1&dog=$dog&opt=4\"><b>Poprzednie mioty</b></a></center>
	</div>
	
	");
	
	if ($foto=="") $foto=1;
	if (file_exists('./psy/'.$imie.'_'.$opt.'.php')) include ('./psy/'.$imie.'_'.$opt.'.php');

break;

}
	
print ("

	<div class=\"menu pionowe\">

		<div class=\"pasek\">
			<a href=\"index.php?ver=1&opt=1\"><font color=\"black\">
			<b>&nbsp;Aktualności</b></font></a>
		</div>

		<div class=\"pasek\">
			&nbsp;Nasze psy:
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=17&opt=0\"><font color=\"black\" size=\"4\">
			<b>Tintin</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=18&opt=0\"><font color=\"black\" size=\"4\">
			<b>Little Mec</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=20&opt=0\"><font color=\"black\" size=\"4\">
			<b>Amon</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=21&opt=0\"><font color=\"black\" size=\"4\">
			<b>Double Trouble For Rival</b></font></a></center>
		</div>

		<div class=\"pasek\">
			&nbsp;Nasze suczki:
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=15&opt=0\"><font color=\"black\" size=\"4\">
			<b>Scarlett O'Hara</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=16&opt=0\"><font color=\"black\" size=\"4\">
			<b>Unique</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=19&opt=0\"><font color=\"black\" size=\"4\">
			<b>Tiny Dancer</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<a href=\"./index.php?ver=1&dog=7&opt=0\"><font color=\"black\">
			<b>&nbsp;Szczenięta</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=1&opt=8\"><font color=\"black\">
			<b>&nbsp;Nasi Weterani</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=1&opt=2\"><font color=\"black\">
			<b>&nbsp;O nas</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=1&opt=6\"><font color=\"black\">
			<b>&nbsp;Kontakt</b></font></a>
		</div>
		
		<div class=\"pasek\">
			<a href=\"index.php?ver=1&opt=5\"><font color=\"black\">
			<b>&nbsp;Album domowy</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=1&opt=4\"><font color=\"black\">
			<b>&nbsp;Linki</b></font></a>
		</div>

	</div>
	
	");
	
switch ($dog) {

case "":
	
	print ("		

	<div id=\"imie_rodowod\">
		<center><font size=\"4\"><b>Witamy na stronie naszej hodowli psów rasy Cavalier King Charles Spaniel!</b></font></center>
		<br /><hr />
	</div>	

	"); break;

 case "7":

	print ("
	<div id=\"imie_rodowod\">
		<center><font size=\"4\"><b>\"Szczenięta\"</b></font></center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "11":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Interchamp.<br />Multi Champ.<br />DARK CRISTAL de la Geode</b><br><br>b &amp; t<br><br>ur. 12.11.2008<br><br>
	Hodowca:<br>Roger Madec</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "15":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>SCARLETT O'HARA Pomeranian Beauties</b><br><br>ruby<br><br>ur: 30.03.2013<br><br>
	Hodowca:<br>Ewa &amp; Witold Rudzinscy</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "16":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>UNIQUE Pomeranian Beauties</b><br><br>b &amp; t<br><br>ur: 04.07.2014<br><br>
	Hodowca:<br>Ewa &amp; Witold Rudzinscy</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "17":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Interchamp.<br />Multi Champ.<br />TINTIN Pomeranian Beauties</b><br><br>b &amp; t<br><br>ur: 28.06.2014<br><br>
	Hodowca:<br>Ewa &amp; Witold Rudzinscy</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "18":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Interchamp.<br />Champ. PL, EST<br />LITTLE MEC de la Geode</b><br><br>b &amp; t<br><br>ur: 24.03.2015<br><br>
	Hodowca:<br>Roger Madec</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "19":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL, BUL<br />TINY DANCER Pomeranian Beauties</b><br><br>ruby<br><br>ur: 28.06.2014<br><br>
	Hodowca:<br>Ewa &amp; Witold Rudzinscy</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "20":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />Mł. Champ. PL<br />AMON Sylena</b><br><br>b &amp; t<br><br>ur: 23.09.2017<br><br>
	Hodowca:<br>Jerzy Olszewski</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "21":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Natali Teodorus DOUBLE TROUBLE FOR RIVAL</b><br><br>b &amp; t<br><br>ur: 12.04.2018<br><br>
	Hodowca:<br>Natalia Varfolomeeva</center>
		<br /><hr />
	</div>
 
 "); break;
 
}

print ("
	
<div class=\"certyfikaty\">

		<center>
		<b>Jesteśmy członkami:</b><br /><br />

<a href=\"http://www.zkwp.pl/zg/\" target=\"_blank\"><font color=\"000000\" size=\"5\"><b>ZKwP</b></font></img></a>
		</center>
	</div>
	
<div class=\"certyfikaty\">

		<center>
<a href=\"http://www.fci.be/\" target=\"_blank\"><font color=\"000000\" size=\"5\"><b>FCI</b></font></a>
		</center>
	</div>

	
<div class=\"certyfikaty\">

		<center>
		<b>Popieramy:</b><br /><br />

<a href=\"http://cavalierworld.eu/cavisiowo/batalia-o-czyste-serca\" target=\"_blank\">
<img src=\"./batalia.jpg\" border=\"0\" alt=\"Batalia o Czyste Serca\">
</img></a>
		</center>
	</div>
	
	<div class=\"certyfikaty\">

		<center>
		<b>Nasze psy karmimy między innymi mięsem firmy Mank:</b><br /><br />

<a href=\"http://karmamank.pl\" target=\"_blank\">
<img src=\"./mank_logo.jpg\" border=\"0\" alt=\"Mank - Mrożonki dla psów\">
</img></a>
		</center>
	</div>
	
	</div>

");	

break;

case "2":

print ("

	<div class=\"top\">

		<div class=\"data\">
			<center>Letztes Update:<br>
");			

if (file_exists("datemod_d.php")) include ("datemod_d.php");

print ("
		</div>

		<div class=\"kontakt\">
			<center><a href=\"mailto:Pomeranian Beauties <ewaiwitek@poczta.fm>\"><font color=\"navy\" size=6>
			E-m@il</font></a></center>
		</div>

		<center>
		<font size=8>&nbsp;&nbsp;Pomeranian Beauties (FCI)</font><br /><br />
		<font size=6>&nbsp;&nbsp;&nbsp;Cavalier King Charles' Spaniel</font>
		</center>

	</div>
	
	<div class=\"content\">
	
	");
	
switch ($dog) 

{

case "":

print ("

	<div class=\"menu_poziome\" id=\"glowna\">
		<center><a href=\"index.php?ver=2\"><b>Index</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"pierwszy\">
		<center><a href=\"index.php?ver=1\"><img src=\"polski.gif\" style=\"border:0\" alt=\"\">
		<b> Polski </b><img src=\"polski.gif\" style=\"border:0\" alt=\"\"></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"drugi\">
		<center><a href=\"index.php?ver=3\"><img src=\"english.gif\" style=\"border:0\" alt=\"\">
		<b> English </b><img src=\"english.gif\" style=\"border:0\" alt=\"\"></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"trzeci\">
		&nbsp;
	</div>

	<div class=\"menu_poziome\" id=\"czwarty\">
		&nbsp;
	</div>
	
	");
	
switch ($opt)

{

case "":

if (file_exists('./index_d.php')) include ('./index_d.php');

break;

case "1":

if (file_exists('./news_d.php')) include ('./news_d.php');

break;

case "2":

if (file_exists('./about_d.php')) include ('./about_d.php');

break;

case "3":

if (file_exists('./guestbook_d.php')) include ('./guestbook_d.php');

break;

case "4":

if (file_exists('./links_d.php')) include ('./links_d.php');

break;

case "5":

if (file_exists('./album_d.php')) include ('./album_d.php');
 
 break;

case "6":

if (file_exists('./contact_d.php')) include ('./contact_d.php');
 
 break;

case "7":

if (file_exists('./rainbow_d.php')) include ('./rainbow_d.php');
 
 break;

case "8":

if (file_exists('./veterans_d.php')) include ('./veterans_d.php');
 
 break;

}		

break;	

default:

	if ($dog=="7") $imie="puppies/puppies";
	elseif ($dog=="15") $imie="clara";
	elseif ($dog=="16") $imie="unia";
	elseif ($dog=="17") $imie="tintin";
	elseif ($dog=="18") $imie="maciek";
	elseif ($dog=="19") $imie="tini";
	elseif ($dog=="20") $imie="amon";
	elseif ($dog=="21") $imie="sasha";
	
	if ($dog!="7") print ("

	<div class=\"menu_poziome\" id=\"glowna\">
		<center><a href=\"index.php?ver=2\"><b>Index</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"pierwszy\">
		<center><a href=\"index.php?ver=2&dog=$dog&opt=1\"><b>Über den Hund</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"drugi\">
		<center><a href=\"index.php?ver=2&dog=$dog&opt=2\"><b>Ahnentafel</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"trzeci\">
		<center><a href=\"index.php?ver=2&dog=$dog&opt=3\"><b>Bildgalerie</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"czwarty\">
		<center><a href=\"index.php?ver=2&dog=$dog&opt=4\"><b>Ausstellungen</b></a></center>
	</div>
	
	");
	
	else print ("

	<div class=\"menu_poziome\" id=\"glowna\">
		<center><a href=\"index.php?ver=2\"><b>Index</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"pierwszy\">
		<center><a href=\"index.php?ver=2&dog=$dog&opt=1\"><b>Eltern</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"drugi\">
		<center><a href=\"index.php?ver=2&dog=$dog&opt=2\"><b>Ahnentafel</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"trzeci\">
		<center><a href=\"index.php?ver=2&dog=$dog&opt=3\"><b>Bildgalerie</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"czwarty\">
		<center><a href=\"index.php?ver=2&dog=$dog&opt=4\"><b>Früheren Würfe</b></a></center>
	</div>
	
	");

	if ($foto=="") $foto=1;
	if (file_exists('./psy/'.$imie.'_'.$opt.'_d.php')) include ('./psy/'.$imie.'_'.$opt.'_d.php');

break;

}	
	
print ("

	<div class=\"menu pionowe\">

		<div class=\"pasek\">
			<a href=\"index.php?ver=2&opt=1\"><font color=\"black\">
			<b>&nbsp;Aktuelles</b></font></a>
		</div>

		<div class=\"pasek\">
			&nbsp;Unsere Rüden:
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=17&opt=0\"><font color=\"black\" size=\"4\">
			<b>Tintin</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=18&opt=0\"><font color=\"black\" size=\"4\">
			<b>Little Mec</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=20&opt=0\"><font color=\"black\" size=\"4\">
			<b>Amon</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=21&opt=0\"><font color=\"black\" size=\"4\">
			<b>Double Trouble For Rival</b></font></a></center>
		</div>

		<div class=\"pasek\">
			&nbsp;Unsere Hündinnen:
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=15&opt=0\"><font color=\"black\" size=\"4\">
			<b>Scarlett O'Hara</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=16&opt=0\"><font color=\"black\" size=\"4\">
			<b>Unique</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=19&opt=0\"><font color=\"black\" size=\"4\">
			<b>Tiny Dancer</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<a href=\"./index.php?ver=2&dog=7&opt=0\"><font color=\"black\">
			<b>&nbsp;Welpen</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=2&opt=8\"><font color=\"black\">
			<b>&nbsp;Unsere Veteranen</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=2&opt=2\"><font color=\"black\">
			<b>&nbsp;Über uns</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=2&opt=6\"><font color=\"black\">
			<b>&nbsp;Kontakt</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=2&opt=5\"><font color=\"black\">
			<b>&nbsp;Fotoalbum</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=2&opt=4\"><font color=\"black\">
			<b>&nbsp;Links</b></font></a>
		</div>

	</div>
	
	");

switch ($dog) {

case "":
	
	print ("		

	<div id=\"imie_rodowod\">
		<center><font size=\"4\"><b>Herzlich willkommen bei den Pomeranian Beauties!</b></font></center>
		<br /><hr />
	</div>	

	"); break;
 
 case "7":

	print ("
	<div id=\"imie_rodowod\">
		<center><font size=\"4\"><b>\"Welpen\"</b></font></center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "11":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Interchamp.<br />Multi Champ.<br />DARK CRISTAL de la Geode</b><br><br>b &amp; t<br><br>geb. 12.11.2008<br><br>
	Züchter:<br>Roger Madec</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "15":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>SCARLETT O'HARA Pomeranian Beauties</b><br><br>ruby<br><br>geb: 30.03.2013<br><br>
	Züchter:<br>Ewa &amp; Witold Rudzinski</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "16":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>UNIQUE Pomeranian Beauties</b><br><br>b &amp; t<br><br>geb: 07.07.2014<br><br>
	Züchter:<br>Ewa &amp; Witold Rudzinski</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "17":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Interchamp.<br />Multi Champ.<br />TINTIN Pomeranian Beauties</b><br><br>b &amp; t<br><br>geb: 28.06.2014<br><br>
	Züchter:<br>Ewa &amp; Witold Rudzinski</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "18":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Interchamp.<br />Champ. PL, EST<br />LITTLE MEC de la Geode</b><br><br>b &amp; t<br><br>geb: 24.03.2015<br><br>
	Züchter:<br>Roger Madec</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "19":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL, BUL<br />TINY DANCER Pomeranian Beauties</b><br><br>ruby<br><br>geb: 28.06.2014<br><br>
	Züchter:<br>Ewa &amp; Witold Rudzinski</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "20":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />Jug. Champ. PL<br />AMON Sylena</b><br><br>b &amp; t<br><br>geb: 23.09.2017<br><br>
	Züchter:<br>Jerzy Olszewski</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "21":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Natali Teodorus DOUBLE TROUBLE FOR RIVAL</b><br><br>b &amp; t<br><br>geb: 12.04.2018<br><br>
	Züchter:<br>Natalia Varfolomeeva</center>
		<br /><hr />
	</div>
 
 "); break;
 
}		

print ("

	<div class=\"certyfikaty\">
		<center>
		<b>Wir sind Mitglieder des:</b><br /><br />

<a href=\"http://www.zkwp.pl/zg/\" target=\"_blank\"><font color=\"000000\" size=\"5\"><b>ZKwP</b></font></img></a>
		</center>
	</div>
	
<div class=\"certyfikaty\">

		<center>
<a href=\"http://www.fci.be/\" target=\"_blank\"><font color=\"000000\" size=\"5\"><b>FCI</b></font></a>
		</center>
	</div>

	
<div class=\"certyfikaty\">

		<center>
		<b>Wir unterstützen:</b><br /><br />

		<center>
<a href=\"http://cavalierworld.eu/cavisiowo/batalia-o-czyste-serca\" target=\"_blank\">
<img src=\"./batalia.jpg\" border=\"0\" alt=\"Batalia o Czyste Serca\">
</img></a>
		</center>

	</div>
	
	");	

break;

case "3":

print ("

	<div class=\"top\">

		<div class=\"data\">
			<center>Last update:<br>

");			

if (file_exists("datemod_e.php")) include ("datemod_e.php");

print ("

		</div>

		<div class=\"kontakt\">
			<center><a href=\"mailto:Pomeranian Beauties <ewaiwitek@poczta.fm>\"><font color=\"navy\" size=6>
			E-m@il</font></a></center>
		</div>

		<center>
		<font size=8>&nbsp;&nbsp;Pomeranian Beauties (FCI)</font><br /><br />
		<font size=6>&nbsp;&nbsp;&nbsp;Cavalier King Charles' Spaniel</font>	
		</center>

	</div>
	
	<div class=\"content\">
	
	");
	
switch ($dog) 

{

case "":

print ("

	<div class=\"menu_poziome\" id=\"glowna\">
		<center><a href=\"index.php?ver=3\"><b>Home Page</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"pierwszy\">
		<center><a href=\"index.php?ver=1\"><img src=\"polski.gif\" style=\"border:0\" alt=\"\">
		<b> Polski </b><img src=\"polski.gif\" style=\"border:0\" alt=\"\"></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"drugi\">
		<center><a href=\"index.php?ver=2\"><img src=\"deutsch.gif\" style=\"border:0\" alt=\"\">
		<b> Deutsch </b><img src=\"deutsch.gif\" style=\"border:0\" alt=\"\"></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"trzeci\">
		&nbsp;
	</div>

	<div class=\"menu_poziome\" id=\"czwarty\">
		&nbsp;
	</div>
	
	");
	
switch ($opt) 

{

case "":

if (file_exists('./index_e.php')) include ('./index_e.php');
	
break;	

case "1":

if (file_exists('./news_e.php')) include ('./news_e.php');

break;

case "2":

if (file_exists('./about_e.php')) include ('./about_e.php');
	
break;

case "3":

if (file_exists('./guestbook_e.php')) include ('./guestbook_e.php');
	
break;

case "4":

if (file_exists('./links_e.php')) include ('./links_e.php');
 
 break;

case "5":

if (file_exists('./album_e.php')) include ('./album_e.php');
 
 break;

case "6":

if (file_exists('./contact_e.php')) include ('./contact_e.php');
 
 break;

case "7":

if (file_exists('./rainbow_e.php')) include ('./rainbow_e.php');
 
 break;

case "8":

if (file_exists('./veterans_e.php')) include ('./veterans_e.php');
 
 break;
	
}

break;	

default:

	if ($dog=="7") $imie="puppies/puppies";
	elseif ($dog=="15") $imie="clara";
	elseif ($dog=="16") $imie="unia";
	elseif ($dog=="17") $imie="tintin";
	elseif ($dog=="18") $imie="maciek";
	elseif ($dog=="19") $imie="tini";
	elseif ($dog=="20") $imie="amon";
	elseif ($dog=="21") $imie="sasha";
	
	if ($dog != "7") print ("

	<div class=\"menu_poziome\" id=\"glowna\">
		<center><a href=\"index.php?ver=3\"><b>Home Page</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"pierwszy\">
		<center><a href=\"index.php?ver=3&dog=$dog&opt=1\"><b>About the dog</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"drugi\">
		<center><a href=\"index.php?ver=3&dog=$dog&opt=2\"><b>Pedigree</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"trzeci\">
		<center><a href=\"index.php?ver=3&dog=$dog&opt=3\"><b>Gallery</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"czwarty\">
		<center><a href=\"index.php?ver=3&dog=$dog&opt=4\"><b>Shows</b></a></center>
	</div>
	
	");
	
	else print ("

	<div class=\"menu_poziome\" id=\"glowna\">
		<center><a href=\"index.php?ver=3\"><b>Home Page</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"pierwszy\">
		<center><a href=\"index.php?ver=3&dog=$dog&opt=1\"><b>Parents</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"drugi\">
		<center><a href=\"index.php?ver=3&dog=$dog&opt=2\"><b>Pedigree</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"trzeci\">
		<center><a href=\"index.php?ver=3&dog=$dog&opt=3\"><b>Gallery</b></a></center>
	</div>

	<div class=\"menu_poziome\" id=\"czwarty\">
		<center><a href=\"index.php?ver=3&dog=$dog&opt=4\"><b>Previous litters</b></a></center>
	</div>
	
	");
	
	if ($foto=="") $foto=1;
	if (file_exists('./psy/'.$imie.'_'.$opt.'_e.php')) include ('./psy/'.$imie.'_'.$opt.'_e.php');

break;

}
	
print ("

	<div class=\"menu pionowe\">

		<div class=\"pasek\">
			<a href=\"index.php?ver=3&opt=1\"><font color=\"black\">
			<b>&nbsp;News</b></font></a>
		</div>

		<div class=\"pasek\">
			&nbsp;Our boys:
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=17&opt=0\"><font color=\"black\" size=\"4\">
			<b>Tintin</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=18&opt=0\"><font color=\"black\" size=\"4\">
			<b>Little Mec</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=20&opt=0\"><font color=\"black\" size=\"4\">
			<b>Amon</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=21&opt=0\"><font color=\"black\" size=\"4\">
			<b>Double Trouble For Rival</b></font></a></center>
		</div>

		<div class=\"pasek\">
			&nbsp;Our girls:
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=15&opt=0\"><font color=\"black\" size=\"4\">
			<b>Scarlett O'Hara</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=16&opt=0\"><font color=\"black\" size=\"4\">
			<b>Unique</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=19&opt=0\"><font color=\"black\" size=\"4\">
			<b>Tiny Dancer</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<a href=\"./index.php?ver=3&dog=7&opt=0\"><font color=\"black\">
			<b>&nbsp;Puppies</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=3&opt=8\"><font color=\"black\">
			<b>&nbsp;Our Veterans</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=3&opt=2\"><font color=\"black\">
			<b>&nbsp;About us</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=3&opt=6\"><font color=\"black\">
			<b>&nbsp;Contact</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=3&opt=5\"><font color=\"black\">
			<b>&nbsp;Photo album</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=3&opt=4\"><font color=\"black\">
			<b>&nbsp;Links</b></font></a>
		</div>

	</div>
	
	");
	
switch ($dog) {

case "":
	
	print ("		

	<div id=\"imie_rodowod\">
		<center><font size=\"4\"><b>Welcome to the Pomeranian Beauties' home page!</b></font></center>
		<br /><hr />
	</div>	

	"); break;
	 
 case "7":

	print ("
	<div id=\"imie_rodowod\">
		<center><font size=\"4\"><b>\"Puppies\"</b></font></center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "11":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Interchamp.<br />Multi Champ.<br />DARK CRISTAL de la Geode</b><br><br>b &amp; t<br><br>born: 12.11.2008<br><br>
	Breeeder:<br>Roger Madec</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "15":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>SCARLETT O'HARA Pomeranian Beauties</b><br><br>ruby<br><br>born: 30.03.2013<br><br>
	Breeeder:<br>Ewa &amp; Witold Rudzinscy</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "16":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>UNIQUE Pomeranian Beauties</b><br><br>b &amp; t<br><br>born: 04.07.2014<br><br>
	Breeeder:<br>Ewa &amp; Witold Rudzinscy</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "17":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Interchamp.<br />Multi Champ.<br />TINTIN Pomeranian Beauties</b><br><br>b &amp; t<br><br>born: 28.06.2014<br><br>
	Breeeder:<br>Ewa &amp; Witold Rudzinscy</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "18":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Interchamp.<br />Champ. PL, EST<br />LITTLE MEC de la Geode</b><br><br>b &amp; t<br><br>born: 24.03.2015<br><br>
	Breeeder:<br>Roger Madec</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "19":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL, BUL<br />TINY DANCER Pomeranian Beauties</b><br><br>ruby<br><br>born: 28.06.2014<br><br>
	Breeeder:<br>Ewa &amp; Witold Rudzinscy</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "20":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />Jun. Champ. PL<br />AMON Sylena</b><br><br>b &amp; t<br><br>born: 23.09.2017<br><br>
	Breeder:<br>Jerzy Olszewski</center>
		<br /><hr />
	</div>
 
 "); break;
  
 case "21":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Natali Teodorus DOUBLE TROUBLE FOR RIVAL</b><br><br>b &amp; t<br><br>born: 12.04.2018<br><br>
	Breeder:<br>Natalia Varfolomeeva</center>
		<br /><hr />
	</div>
 
 "); break;
 
}

print ("	
	


	<div class=\"certyfikaty\">
		<center>
		<b>We are members of:</b><br /><br />

<a href=\"http://www.zkwp.pl/zg/\" target=\"_blank\"><font color=\"000000\" size=\"5\"><b>ZKwP</b></font></img></a>
		</center>
	</div>
	
<div class=\"certyfikaty\">

		<center>
<a href=\"http://www.fci.be/\" target=\"_blank\"><font color=\"000000\" size=\"5\"><b>FCI</b></font></a>
		</center>
	</div>

	
<div class=\"certyfikaty\">

		<center>
		<b>We support:</b><br /><br />

		<center>
<a href=\"http://cavalierworld.eu/cavisiowo/batalia-o-czyste-serca\" target=\"_blank\">
<img src=\"./batalia.jpg\" border=\"0\" alt=\"Batalia o Czyste Serca\">
</img></a>
		</center>

	</div>

");	

break;

}

}

?>

<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=7628679; 
var sc_invisible=1; 
var sc_security="bcb5147c"; 
</script>
<script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script>
<noscript><div class="statcounter"><a title="click
tracking" href="http://statcounter.com/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/7628679/0/bcb5147c/1/"
alt="click tracking"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->

</body>

</html>
