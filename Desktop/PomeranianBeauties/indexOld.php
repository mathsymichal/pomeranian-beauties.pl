<html>

<head>

<title>Pomeranian Beauties</title>

<meta http-equiv=Content-Type content="text/html; charset=windows-1250">
<meta http-equiv=Content-Language content=pl>
<meta name="Keywords" content="psy, pies, suka, suki, Pomeranian, Beauties, cavalier, king, charles, spaniel, Pomeranian Beauties, cavaliery, Xandra, Kentucky Joe, Papa Joe, Sanka, Avanti, Norma Jean, Norma, Silver Woman, Silly, Silka, Danny, Fever My Hope">

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
		<center><a href=\"mailto:Webmaster Pomeranian Beauties <cavaliery@poczta.fm>\"><b>
		webm@aster</b></a></center>
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
	
}

break;	

default:

	if ($dog=="1") $imie="sana";
	elseif ($dog=="2") $imie="joe";
	elseif ($dog=="3") $imie="norma";
	elseif ($dog=="4") $imie="harpo";
	elseif ($dog=="5") $imie="danny";
	elseif ($dog=="6") $imie="silka";
	elseif ($dog=="7") $imie="puppies/puppies";
	elseif ($dog=="8") $imie="casia";
	elseif ($dog=="9") $imie="coca";
	elseif ($dog=="10") $imie="dayla";
	elseif ($dog=="11") $imie="darek";
	
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
			<center>Nasze psy:</center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=2&opt=0\"><font color=\"black\" size=\"4\">
			<b>Kentucky Joe</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=5&opt=0\"><font color=\"black\" size=\"4\">
			<b>Fever my Hope</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=4&opt=0\"><font color=\"black\" size=\"4\">
			<b>Harpo</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=11&opt=0\"><font color=\"black\" size=\"4\">
			<b>Dark Cristal</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=1&opt=0\"><font color=\"black\" size=\"4\">
			<b>Xandra</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=3&opt=0\"><font color=\"black\" size=\"4\">
			<b>Norma Jean</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=6&opt=0\"><font color=\"black\" size=\"4\">
			<b>Silver Woman</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=8&opt=0\"><font color=\"black\" size=\"4\">
			<b>Cassandra</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=9&opt=0\"><font color=\"black\" size=\"4\">
			<b>Calypso</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=10&opt=0\"><font color=\"black\" size=\"4\">
			<b>Daylight</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=1&dog=7&opt=0\"><font color=\"black\" size=\"4\">
			<b>Szczenięta</b></font></a></center>
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
			<a href=\"index.php?ver=1&opt=3\"><font color=\"black\">
			<b>&nbsp;Księga Gości</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=1&opt=5\"><font color=\"yellow\">
			<b>&nbsp;Album domowy</b></font>&nbsp;<img src=\"./new.jpg\"></a>
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
	</div>	

	"); break;
	
case "1":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL Xandra<br>vom Oppermann - Schlößchen</b><br><br>ruby<br><br>ur. 30.03.2003 r.<br><br>
  Hodowca:<br>Elke von Malottki</center>
 </div>
 
 "); break;
 
 case "2":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL, D, L<br />Mł. Champ. PL<br /><br />Kentucky Joe<br>du château noblesse</b><br><br>b &amp; t<br><br>ur. 20.02.2004 r.<br><br>
  Hodowca:<br>Tanja Schumann</center>

	</div>
 
 "); break;
 
 case "3":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />Mł. Champ. D<br /><br />Norma Jean<br>du château noblesse</b><br><br>ruby<br><br>ur. 27.06.2005 r.<br><br>Hodowca:<br>Tanja Schumann</center>
	</div>
 
 "); break;
 
 case "4":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL, D, L<br /><br />Royal Hero`s HARPO</b><br><br>b &amp; t<br><br>ur. 6.12.2003 r.<br><br>Hodowca:<br>Peter Voye</center>
	</div>
 
 "); break;
 
 case "5":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Interchamp.<br />Multi Champ.<br /><br />Royal Hero`s FEVER my HOPE</b><br><br>ruby<br><br>ur. 25.09.2002 r.<br><br>Hodowca:<br>Peter Voye</center>
	</div>
 
 "); break;
 
 case "6":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />SILVER WOMAN van Cavino</b><br><br>b &amp; t<br><br>ur. 4.12.2005 r.<br><br>
	Hodowca:<br>Angela Nijland-Overkamp</center>
	</div>
 
 "); break;
 
 case "7":

	print ("
	<div id=\"imie_rodowod\">
		<center><font size=\"4\"><b>\"Szczenięta\"</b></font></center>
	</div>
 
 "); break;
 
 case "8":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>CASSANDRA vom Paulinenhof</b><br><br>ruby<br><br>ur. 13.05.2007 r.<br><br>
	Hodowca:<br>Heidi &amp; Dieter Junghans</center>
	</div> 
	
 "); break;
 
 case "9":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />CALYPSO Pomeranian Beauties</b><br><br>b &amp; t<br><br>ur. 05.08.2007 r.<br><br>
	Hodowca:<br>Ewa &amp; Witold Rudzińscy</center>
	</div> 
	
 "); break;
 
 case "10":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />Mł. Champ. PL<br />DAYLIGHT Pomeranian Beauties</b><br><br>ruby<br><br>ur. 26.04.2008 r.<br><br>
	Hodowca:<br>Ewa &amp; Witold Rudzińscy</center>
	</div> 
	
 "); break;
  
 case "11":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />Mł. Champ. PL<br />DARK CRISTAL de la Geode</b><br><br>b &amp; t<br><br>ur. 12.11.2008<br><br>
	Hodowca:<br>Roger Madec</center>
	</div>
 
 "); break;
 
}

print ("	
	
	<div class=\"certyfikaty\">

		<center>
<a href=\"http://www.cavalierworld.eu/cavisiowo/portal.php?show=71\" target=\"_blank\">
<img src=\"./batalia.jpg\" border=\"0\" alt=\"Batalia o Czyste Serca\">
</img></a>
		</center>
	</div>
	
<div class=\"certyfikaty\">

		<center>
<a href=\"http://www.stoppseudohodowcom.org\" target=\"_blank\"><img src=\"./stop_pseudohodowcom.gif\" border=\"0\" alt=\"Stop pseudohodowcom!\"></a>
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
		<center><a href=\"mailto:Webmaster Pomeranian Beauties <cavaliery@poczta.fm>\"><b>
		webm@aster</b></a></center>
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

}		

break;	

default:

	if ($dog=="1") $imie="sana";
	elseif ($dog=="2") $imie="joe";
	elseif ($dog=="3") $imie="norma";
	elseif ($dog=="4") $imie="harpo";
	elseif ($dog=="5") $imie="danny";
	elseif ($dog=="6") $imie="silka";
	elseif ($dog=="7") $imie="puppies/puppies";
	elseif ($dog=="8") $imie="casia";
	elseif ($dog=="9") $imie="coca";
	elseif ($dog=="10") $imie="dayla";
	elseif ($dog=="11") $imie="darek";
	
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
			<center>Unsere Hunde:</center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=2&opt=0\"><font color=\"black\" size=\"4\">
			<b>Kentucky Joe</b></font></a></center>
		</div>
			
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=5&opt=0\"><font color=\"black\" size=\"4\">
			<b>Fever my Hope</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=4&opt=0\"><font color=\"black\" size=\"4\">
			<b>Harpo</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=11&opt=0\"><font color=\"black\" size=\"4\">
			<b>Dark Cristal</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=1&opt=0\"><font color=\"black\" size=\"4\">
			<b>Xandra</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=3&opt=0\"><font color=\"black\" size=\"4\">
			<b>Norma Jean</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=6&opt=0\"><font color=\"black\" size=\"4\">
			<b>Silver Woman</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=8&opt=0\"><font color=\"black\" size=\"4\">
			<b>Cassandra</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=9&opt=0\"><font color=\"black\" size=\"4\">
			<b>Calypso</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=10&opt=0\"><font color=\"black\" size=\"4\">
			<b>Daylight</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=2&dog=7&opt=0\"><font color=\"black\" size=\"4\">
			<b>Welpen</b></font></a></center>
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
			<a href=\"index.php?ver=2&opt=3\"><font color=\"black\">
			<b>&nbsp;Gästebuch</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=2&opt=5\"><font color=\"yellow\">
			<b>&nbsp;Fotoalbum</b></font>&nbsp;<img src=\"./new.jpg\"></a>
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
	</div>	

	"); break;
	
case "1":

	print ("
	 <div id=\"imie_rodowod\">
  <center><b>Xandra<br>vom Oppermann - Schlößchen</b><br><br>ruby<br><br>geb. 30.03.2003<br><br>
  Züchter:<br>Elke von Malottki</center>
 </div>
 
 "); break;
 
 case "2":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL, D, L<br />Jug. Champ. PL<br /><br />Kentucky Joe<br>du château noblesse</b><br><br>b &amp; t<br><br>geb. 20.02.2004<br><br>
  Züchter:<br>Tanja Schumann</center>
	</div>
 
 "); break;
 
 case "3":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ PL<br />Jug. Champ. D<br /><br />Norma Jean<br>du château noblesse</b><br><br>ruby<br><br>geb. 27.06.2005<br><br>Züchter:<br>Tanja Schumann</center>
	</div>
 
 "); break;
 
 case "4":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL, D, L<br /><br />Royal Hero`s HARPO</b><br><br>b &amp; t<br><br>geb. 6.12.2003 r.<br><br>Züchter:<br>Peter Voye</center>
	</div>
 
 "); break;
 
 case "5":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Interchamp.<br />Multi Champ.<br /><br />Royal Hero`s FEVER my HOPE</b><br><br>ruby<br><br>geb. 25.09.2002 r.<br><br>Züchter:<br>Peter Voye</center>
	</div>
 
 "); break;
 
 case "6":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />SILVER WOMAN van Cavino</b><br><br>b &amp; t<br><br>geb. 4.12.2005<br><br>
  Züchter:<br>Angela Nijland-Overkamp</center>
	</div>
 
 "); break;
 
 case "7":

	print ("
	<div id=\"imie_rodowod\">
		<center><font size=\"4\"><b>\"Welpen\"</b></font></center>
	</div>
 
 "); break;
 
 case "8":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>CASSANDRA vom Paulinenhof</b><br><br>ruby<br><br>geb. 13.05.2007<br><br>
	Züchter:<br>Heidi &amp; Dieter Junghans</center>
	</div>
	
 "); break;

 case "9": 
 
	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />CALYPSO Pomeranian Beauties</b><br><br>b &amp; t<br><br>geb. 05.08.2007<br><br>
	Züchter:<br>Ewa &amp; Witold Rudzinscy</center>
	</div>
	
 "); break;

 case "10": 
 
	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />Jug. Champ. PL<br />DAYLIGHT Pomeranian Beauties</b><br><br>ruby<br><br>geb. 26.04.2008<br><br>
	Züchter:<br>Ewa &amp; Witold Rudzinscy</center>
	</div>
	
 "); break;
  
 case "11":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />Jug. Champ. PL<br />DARK CRISTAL de la Geode</b><br><br>b &amp; t<br><br>geb. 12.11.2008<br><br>
	Züchter:<br>Roger Madec</center>
	</div>
 
 "); break;
 
}		

print ("

	<div class=\"certyfikaty\">

		<center>
<a href=\"http://www.cavalierworld.eu/cavisiowo/portal.php?show=71\" target=\"_blank\">
<img src=\"./batalia.jpg\" border=\"0\" alt=\"Batalia o Czyste Serca\">
</img></a>
		</center>
	</div>
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
		<center><a href=\"mailto:Webmaster Pomeranian Beauties <cavaliery@poczta.fm>\"><b>
		webm@aster</b></a></center>
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
	
}

break;	

default:

	if ($dog=="1") $imie="sana";
	elseif ($dog=="2") $imie="joe";
	elseif ($dog=="3") $imie="norma";
	elseif ($dog=="4") $imie="harpo";
	elseif ($dog=="5") $imie="danny";
	elseif ($dog=="6") $imie="silka";
	elseif ($dog=="7") $imie="puppies/puppies";
	elseif ($dog=="8") $imie="casia";
	elseif ($dog=="9") $imie="coca";
	elseif ($dog=="10") $imie="dayla";
	elseif ($dog=="11") $imie="darek";
	
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
			<center>Our dogs:</center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=2&opt=0\"><font color=\"black\" size=\"4\">
			<b>Kentucky Joe</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=5&opt=0\"><font color=\"black\" size=\"4\">
			<b>Fever my Hope</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=4&opt=0\"><font color=\"black\" size=\"4\">
			<b>Harpo</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=11&opt=0\"><font color=\"black\" size=\"4\">
			<b>Dark Cristal</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=1&opt=0\"><font color=\"black\" size=\"4\">
			<b>Xandra</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=3&opt=0\"><font color=\"black\" size=\"4\">
			<b>Norma Jean</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=6&opt=0\"><font color=\"black\" size=\"4\">
			<b>Silver Woman</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=8&opt=0\"><font color=\"black\" size=\"4\">
			<b>Cassandra</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=9&opt=0\"><font color=\"black\" size=\"4\">
			<b>Calypso</b></font></a></center>
		</div>
		
		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=10&opt=0\"><font color=\"black\" size=\"4\">
			<b>Daylight</b></font></a></center>
		</div>

		<div class=\"pasek\">
			<center><a href=\"./index.php?ver=3&dog=7&opt=0\"><font color=\"black\" size=\"4\">
			<b>Puppies</b></font></a></center>
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
			<a href=\"index.php?ver=3&opt=3\"><font color=\"black\">
			<b>&nbsp;Guestbook</b></font></a>
		</div>

		<div class=\"pasek\">
			<a href=\"index.php?ver=3&opt=5\"><font color=\"yellow\">
			<b>&nbsp;Photo album</b></font>&nbsp;<img src=\"./new.jpg\"></a>
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
		<center><font size=\"4\"><b>Welcome at the Pomeranian Beauties' home page!</b></font></center>
	</div>	

	"); break;
	
case "1":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL Xandra<br>vom Oppermann - Schlößchen</b><br><br>ruby<br><br>born: 30.03.2003<br><br>
  Breeder:<br>Elke von Malottki</center>
 </div>
 
 "); break;
 
 case "2":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL, D, L<br />Jun. Champ. PL<br /><br />Kentucky Joe<br>du château noblesse</b><br><br>b &amp; t<br><br>born: 20.02.2004<br><br>
  Breeder:<br>Tanja Schumann</center>

	</div>
 
 "); break;
 
 case "3":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />Jun. Champ. D<br /><br />Norma Jean<br>du château noblesse</b><br><br>ruby<br><br>born: 27.06.2005<br><br>Breeder:<br>Tanja Schumann</center>
	</div>
 
 "); break;
 
 case "4":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL, D, L<br /><br />Royal Hero`s HARPO</b><br><br>b &amp; t<br><br>born: 6.12.2003 r.<br><br>Breeder:<br>Peter Voye</center>
	</div>
 
 "); break;
 
 case "5":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Interchamp.<br />Multi Champ.<br /><br />Royal Hero`s FEVER my HOPE</b><br><br>ruby<br><br>born: 25.09.2002<br><br>Breeder:<br>Peter Voye</center>
	</div>
 
 "); break;
 
 case "6":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />SILVER WOMAN van Cavino</b><br><br>b &amp; t<br><br>born: 4.12.2005<br><br>
	Breeeder:<br>Angela Nijland-Overkamp</center>
	</div>
 
 "); break;
 
 case "7":

	print ("
	<div id=\"imie_rodowod\">
		<center><font size=\"4\"><b>\"Puppies\"</b></font></center>
	</div>
 
 "); break;
  
 case "8":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>CASSANDRA vom Paulinenhof</b><br><br>ruby<br><br>born: 13.05.2007<br><br>
	Breeeder:<br>Heidi &amp; Dieter Junghans</center>
	</div>
 
 "); break;
  
 case "9":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />CALYPSO Pomeranian Beauties</b><br><br>b &amp; t<br><br>born: 05.08.2007<br><br>
	Breeeder:<br>Ewa &amp; Witold Rudzinscy</center>
	</div>
 
 "); break;
  
 case "10":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />Jun. Champ. PL<br />DAYLIGHT Pomeranian Beauties</b><br><br>ruby<br><br>born: 26.04.2008<br><br>
	Breeeder:<br>Ewa &amp; Witold Rudzinscy</center>
	</div>
 
 "); break;
  
 case "11":

	print ("
	<div id=\"imie_rodowod\">
  <center><b>Champ. PL<br />Jun. Champ. PL<br />DARK CRISTAL de la Geode</b><br><br>b &amp; t<br><br>born: 12.11.2008<br><br>
	Breeeder:<br>Roger Madec</center>
	</div>
 
 "); break;
 
}

print ("	
	
	<div class=\"certyfikaty\">

		<center>
<a href=\"http://www.cavalierworld.eu/cavisiowo/portal.php?show=71\" target=\"_blank\">
<img src=\"./batalia.jpg\" border=\"0\" alt=\"Batalia o Czyste Serca\">
</img></a>
		</center>
	</div>
<!--
	<div class=\"certyfikaty\">

		<center>
<a href=\"http://www.zkwp.katowice.pl/wystawa_cavalier08.htm\" target=\"_blank\">
<img src=\"http://www.zkwp.katowice.pl/img/cavikada2008.jpg\" border=\"0\" alt=\"CAVIKADA 2008\">
</img></a>
		</center>
	</div>
-->
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
