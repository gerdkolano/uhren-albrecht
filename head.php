<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php 
include("multilingual.php");

$file = $_GET["file"]; 
if ($file == "") {$file="index";} 
$lang = $_GET["lang"];
if ($lang == "") {$lang="de";} 

function gehnach( $lang, $ziel) {
  echo "\"$ziel.php?lang=$lang&amp;file=$ziel\"";
}
?>
<?php 
function foto( $klein, $grosz, $title, $copyright, $lang) {
  echo "
          <table border=\"0\">
          <tr><td><a href=\"".$grosz."\" target=\"_blank\">
                     <img src=\"".$klein."\" height=\"100\"></td></tr>
                  </a>
          <tr><td align=\"center\">".$title."</td></tr>
          <tr><td align=\"center\"><font size=\"-3\">".$copyright."</font></td></tr>
          </table>
";
}?>
<html lang="<?php echo $lang?>"><?php /* $jetzt=date("Y-m-d H.i.s", time()); print "<!-- created " . $jetzt . " -->" */ ; ?>

<head>
<!--- /home/hanno/joomla-artikel/upload-to-uhren-albrecht.sh --->
<link href="uhrenalbrecht.css" rel="stylesheet" type="text/css">
<title><?php titel( $lang)?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="<?php description( $lang); ?>">
<meta name="keywords" content="<?php keywords( $lang); ?>">
<script language="JavaScript" type="text/javascript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->
</script>
<!-- Hier werden die "keywords" angezeigt -->
<!-- http://www.sortorama.de/uhren-albrecht-de-313101.html -->
<!-- http://web2.cylex.de/firma-home/alexander-albrecht-2262046.html -->
</head>
<body>
<div id="footer"> 
  <div id="nav">
    <!---                  unterer Seitenrand und Dateiname --->        
    <a href=<?php gehnach( $lang, "index"        )?>><?php index             ( $lang);?></a>
    <a href=<?php gehnach( $lang, "turmuhren"    )?>><?php turmuhren_kurz    ( $lang);?></a>
    <a href=<?php gehnach( $lang, "zu-verkaufen" )?>><?php zu_verkaufen_kurz ( $lang);?></a>
    <a href=<?php gehnach( $lang, "reparatur"    )?>><?php reparatur_kurz    ( $lang);?></a>
    <a href=<?php gehnach( $lang, "zeiterfassung")?>><?php zeiterfassung_kurz( $lang);?></a>
    <a href=<?php gehnach( $lang, "zeitanzeige"  )?>><?php zeitanzeige_kurz  ( $lang);?></a>
    <a href=<?php gehnach( $lang, "presse-echo"  )?>><?php presse_echo_kurz  ( $lang);?></a>
    <a href="http://grossuhren.blogspot.com/">Blogspot</a> 
  <div id="navl"> 
    <a href=<?php gehnach( "en",  $file)?>>English</a> 
    <a href=<?php gehnach( "de",  $file)?>>Deutsch</a> 
    <a href=<?php gehnach( "pl",  $file)?>>Po polsku</a>
  </div> 
  </div> 
</div><!-- id="footer" <div id="content"> -->


<table width="90%" border="0" align="center" cellpadding="1">
  <tr> 
    <td colspan="3">
      <div class="unserangebot"><strong><?php UnserAngebot( $lang);?></strong></div>
    </td>
    <td width="15%" rowspan="2">
      <div class="mittig">
        <img src="gestaltung/logo-12.gif" 
             alt="Logo Alexander Albrecht AA 12" 
             title="Alexander Albrecht" width="106" height="106">
       </div>
    </td>
    <td width="11%" rowspan="2">
      <div class="mittig">
        <strong class="seitwann">
          <br>
          <?php seitwann( $lang);?>
        </strong>
      </div>
    </td>
    <td width="44%" rowspan="2">
      <div class="mittig"><strong class="adresse">

A. ALBRECHT<br>
<?php $telefon="Tel: +49170/1825472 &middot; Fax: +4969/7392508"; $telefon="Tel: +49170/1825472";
 $strasze_und_stadt="<a href=\"http://www.openstreetmap.org/?mlat=50.10347&amp;mlon=8.63585&amp;zoom=15&amp;layers=M\" target=\"_blank\">Schwalbacher Str. 61 &middot; 60326 Frankfurt/M.</a>"?>
<?php if ($lang == "en") { echo "
PO Box 190181 &middot; D-60088 Frankfurt/M. <br>
".$strasze_und_stadt." <br>
$telefon <br>
";} elseif ($lang == "pl") { echo "
PO Box 190181 &middot; D-60088 Frankfurt/M. <br>
".$strasze_und_stadt." <br>
$telefon <br>
";} else { echo "
Postfach 190181 &middot; 60088 Frankfurt/M. <br>
".$strasze_und_stadt." <br>
$telefon <br>
";}?>
E-Mail: <span style="color:red">uhrendienstealbrecht</span><span style="color:red">@</span><span style="color:red">web.de</span>
<br>
St.-Nr. 1280160489 &middot; U.Id-Nr. DE 172953487
         </strong>
       </div>
    </td>
  </tr>
  <tr> 
    <td width="10%"><div class="mittig"><a href=<?php gehnach( "en", $file)?> title="english"><img src="gestaltung/Flag-United-Kingdom.png" alt="Flag-United-Kingdom" title="United Kingdom" height="40"></a></div></td>
    <td width="10%"><div class="mittig"><a href=<?php gehnach( "de", $file)?> title="deutsch"><img src="gestaltung/Flag-Germany.png" alt="Flag-Germany" title="Deutschland" height="40"></a></div></td>
    <td width="10%"><div class="mittig"><a href=<?php gehnach( "pl", $file)?> title="po polsku"> <img src="gestaltung/Flag-Poland.png" alt="Flag-Poland" title="Polska" height="40"></a></div></td>
  </tr>
</table>

<hr class="stark">

<!--
for i in "   Verkauf   " "    Sale    " " Sprzeda-B¿ "; do convert -background darkblue -fill white -font AvantGarde-Demi -size x30 -pointsize 18  -gravity center label:"$i"  /tmp/"$i.gif"; done-A
-->
<?php function buttonstart( $lang) {
if ($lang == "en") { echo 
"gestaltung/home.gif"
;} elseif ($lang == "pl") { echo 
"gestaltung/Start.gif"
;} else { echo 
"gestaltung/startseite.gif"
;}
}

function button_zu_verkaufen( $lang) {
if ($lang == "en") { echo 
"gestaltung/Sale.gif"
;} elseif ($lang == "pl") { echo 
"gestaltung/Sprzedaz.gif"
;} else { echo 
"gestaltung/Verkauf.gif"
;}
}

function buttonturmuhren( $lang) {
if ($lang == "en") { echo 
"gestaltung/towerclocks.gif"
;} elseif ($lang == "pl") { echo 
"gestaltung/zegary-wiezowe.gif"
;} else { echo 
"gestaltung/turmuhren.gif"
;}
}

function buttonreparatur( $lang) {
if ($lang == "en") { echo 
"gestaltung/repair.gif"
;} elseif ($lang == "pl") { echo 
"gestaltung/Naprawa.gif"
;} else { echo 
"gestaltung/reparatur.gif"
;}
}

function buttonzeiterfassung( $lang) {
if ($lang == "en") { echo 
"gestaltung/time-recording.gif"
;} elseif ($lang == "pl") { echo 
"gestaltung/Chronometraz.gif"
;} else { echo 
"gestaltung/zeiterfassung.gif"
;}
}

function buttonzeitanzeige( $lang) {
if ($lang == "en") { echo 
"gestaltung/calendar-clocks.gif"
;} elseif ($lang == "pl") { echo 
"gestaltung/Wyswietlacze.gif"
;} else { echo 
"gestaltung/lcd-displays.gif"
;}
}

function buttonpresseecho( $lang) {
if ($lang == "en") { echo 
"gestaltung/press-roundup.gif"
;} elseif ($lang == "pl") { echo 
"gestaltung/Prasa.gif"
;} else { echo 
"gestaltung/presse-echo.gif"
;}
}
?>
<div class="nachlinks">
  <a href=<?php gehnach( $lang, "index")?>>
    <img src="<?php buttonstart( $lang);?>" width="100" height="30" alt="Startbutton" title="Start" /></a>
</div>

<div class="nachlinks">
  <a href=<?php gehnach( $lang, "zu-verkaufen")?>><img src="<?php button_zu_verkaufen( $lang);?>" width="100" height="30" alt="Zu verkaufen" title="Zu verkaufen" /></a>
</div>

<div class="nachlinks">
  <a href=<?php gehnach( $lang, "turmuhren")?>><img src="<?php buttonturmuhren( $lang);?>" width="100" height="30" alt="Turmuhren" title="Turmuhren" /></a>
</div>

<div class="nachlinks">
  <a href=<?php gehnach( $lang, "reparatur") ?>><img src="<?php buttonreparatur( $lang);?>" width="100" height="30" alt="Reparaturen" title="Reparaturen" /></a>
</div>

<div class="nachlinks">
  <a href=<?php gehnach( $lang, "zeiterfassung")?>><img src="<?php buttonzeiterfassung( $lang);?>" width="100" height="30" alt="Zeiterfassung" title="Zeiterfassung" /></a>
</div>

<div class="nachlinks">
  <a href=<?php gehnach( $lang, "zeitanzeige")?>><img src="<?php buttonzeitanzeige( $lang);?>" width="100" height="30" alt="Zeitanzeige" title="Zeitanzeige" /></a>
</div>

<div class="nachlinks">
  <a href=<?php gehnach( $lang, "presse-echo")?>><img src="<?php buttonpresseecho( $lang);?>" width="100" height="30" alt="Presseecho" title="Presseecho" /></a>
</div>

<div class="nachlinks">
  <a href="http://grossuhren.blogspot.com/"><img src="gestaltung/blogspot.gif" width="100" height="30" alt="Blogspot" title="Blogspot" /></a>
</div>

<p class="stopfloat"></p>
<!-- Ende des Kopfes ++ ++ Ende des Kopfes ++ ++ Ende des Kopfes ++ ++ Ende des Kopfes -->
