<?php 
include("head.php");

$mit_kopie=0;
function artikel( $datum, $ort, $zeitung, $intro, $zitat, $ziel, $klein, $alt, $grosz, $copyright, $karte, $lang) {
  if ($lang == "en") {
    $lesen = "read newspaper article";
    $lageplan = "map of the area";
  } elseif ($lang == "pl") {
    $lesen = "Czyta&#263; artyku&#322; prasowy";
    $lageplan = "plan sytuacyjny";
  } else {
    $lesen = "Zeitungsartikel lesen";
    $lageplan = "Lageplan";
  }

  echo "
<table width=\"90%\" border=\"0\" align=\"center\" cellspacing=\"10\">
  <tr> 
    <td>
      <h3>".$datum." ".$zeitung."</h3> 
      <p>".
           "<a href=\"". $karte . "\" title=\"".$lageplan."\" target=\"_blank\">" . $ort . ". </a>"
        ."<strong>" .$intro."</strong></p> 
      <p>" .$zitat."</p> 
      <a href=\"" .$ziel."\" target=\"_blank\">".$lesen."</a>";
 if($mit_kopie){include("2012-30-12-alsfelder-allgemeine.php");}
echo "
    </td>
    <td>
       <div class=\"rechts\">
         <a href=\"".$grosz."\" target=\"_blank\">
<table border=\"0\">
<tr><td><img src=\"".$klein."\" alt=\"".$alt."\" title=\"".$alt."\" height=100></td></tr>
<tr><td><span class=\"urheber\">".$copyright."</span></td></tr>
</table>
         </a>
       </div>
    </td>
  </tr>
</table><hr />
";
}
?>

<h3 class="mittig"><strong>
<?php if ($lang == "en") { echo "
&lsquo;what the papers say&rsquo;
";} elseif ($lang == "pl") { echo "
Przegl&#261;d prasy
";} else { echo "
Presse-Echo
";}?>
</strong></h3>

<?php
artikel( "30.12.2012", 
	 "Bad Nauheim",
	 "Wetterauer Zeitung",
	 "Ticktack: Die Bahnhofsuhr geht jetzt richtig",
	 "Spezialist <span class=\"albrecht\">Alexander Albrecht</span> 
              hat sich vor drei Jahren intensiv ...",
	 "http://www.wetterauer-zeitung.de/Home/Kreis/Staedte-und-Gemeinden/Bad-Nauheim/Artikel,-Ticktack-Die-Bahnhofsuhr-geht-jetzt-richtig-_arid,390725_regid,3_puid,1_pageid,75.html#null",
	 "bilder/Bad_Nauheim_Bahnhofsallee-x100.jpg",
	 "Bad Nauheim Bahnhofsallee",
	 "https://upload.wikimedia.org/wikipedia/commons/9/9a/Bad_Nauheim_Bahnhofsallee.jpg",
	 "<a href=\"https://de.wikipedia.org/w/index.php?title=Datei:Bad_Nauheim_Bahnhofsallee.jpg\" target=\"_blank\">&copy; Eva Kr&ouml;cher</a>",
	 "http://www.openstreetmap.org/?mlat=50.36781&amp;mlon=8.74833&amp;zoom=16&amp;layers=M",
	 $lang);

artikel( "03.01.2013", 
	 "Gie&szlig;en",
	 "Gie&szlig;ener Allgemeine",
	 "Zwei der vier Uhren sind defekt",
	 "Diesmal wurden sie komplett ausgebaut ...",
	 "http://www.giessener-allgemeine.de/Home/Stadt/Uebersicht/Artikel,-Zwei-der-vier-Uhren-am-Bahnhofsturm-defekt-_arid,391714_regid,1_puid,1_pageid,113.html#null",
	 "bilder/Giessen_Hauptbahnhof-x100.JPG",
	 "Gie&szlig;en Hauptbahnhof",
	 "https://upload.wikimedia.org/wikipedia/commons/2/21/Giessen_Hauptbahnhof.JPG",
	 "<a href=\"https://de.wikipedia.org/w/index.php?title=Datei:Giessen_Hauptbahnhof.JPG\" target=\"_blank\">&copy; Rudolf Stricker</a>",
	 "http://www.openstreetmap.org/?mlat=50.579522&amp;mlon=8.66295&amp;zoom=15&amp;layers=M",
	 $lang);

artikel( "08.12.2012", 
	 "Berlin",
	 "TS Aktuell &dash; Zeitung f&uuml;r Tempelhof und Sch&ouml;neberg",
	 "Es tut sich was am Ullsteinhaus",
	 "Nicht nur die Uhren am Turm des Wahrzeichens laufen wieder ...",
	 "http://www.tsaktuell.de/TSaktuell_08_Dezember_2012_web.pdf",
	 "bilder/Zdjecie1585-small.jpg",
	 "Ullsteinhaus Berlin",
	 "bilder/Zdjecie1585.jpg",
	 "",
	 "http://www.openstreetmap.org/?mlat=52.4533&amp;mlon=13.3853&amp;zoom=15&amp;layers=M",
	 $lang);

artikel( "00.00.0000", 
	 "Offenbach",
	 "Alter Schlachthof",
	 "Auf die Sekunde genau",
	 "... Restauration und Modernisierung des Uhrwerks wurde von der Firma 
             <span class=\"albrecht\"> A. Albrecht </span> durchgef&uuml;hrt.",
	 "zeitungsartikel/Offenbach.pdf",
	 "bilder/Offenbach,_alterSchlachthof.1x100.JPG",
	 "Offenbach, alter Schlachthof",
	 "http://upload.wikimedia.org/wikipedia/commons/7/7a/Offenbach,_alterSchlachthof.1.JPG",
	 "<a href=\"http://de.wikipedia.org/w/index.php?title=Datei:Offenbach,_alterSchlachthof.1.JPG\" target=\"_blank\">&copy; Roberta F.</a>",
	 "http://www.openstreetmap.org/?mlat=50.09305&amp;mlon=8.773600&amp;zoom=15&amp;layers=M",
	 $lang);

artikel( "28.10.2002", 
	 "Zeilsheim",
	 " H&ouml;chster Kreisblatt",
	 "Schmuckst&uuml;ck f&uuml;r die Kollwitz-Schule: Historische Turmuhr restauriert",
	 "Die Frankfurter Firma von <span class=\"albrecht\"> Alexander Albrecht </span>
..
montierte einen neuen
Hammer ...",
	 "zeitungsartikel/Kollwitz-Schule.pdf",
	 "bilder/kaethe-kollwitz-schule-frankfurt-am-mainx100.jpg",
	 "K&auml;the-Kollwitz-Schule, Frankfurt am Main",
	 "http://www.frankfurt.de/sixcms/media.php/674/kollwitz.jpg",
	 "<a href=\"http://www.frankfurt.de/sixcms/detail.php?id=8668&_ffmpar[_id_inhalt]=20948\" target=\"_blank\">&copy; Stadt Frankfurt am Main</a>",
	 "http://www.openstreetmap.org/?mlat=50.094067&amp;mlon=8.495387&amp;zoom=15&amp;layers=M",
	 $lang);

artikel( "19.12.2002", 
	 "K&ouml;nigstein",
	 "Eberhard Horn | Prime Estates GmbH ehemaliges Rathaus, Hauptstra&szlig;e 15 &#8729; 61462 K&ouml;nigstein",
	 "Blick nach oben gen&uuml;gt",
	 "... von dem Frankfurter Uhrmachermeister
             <span class=\"albrecht\"> Alexander Albrecht</span>
             fachm&auml;nnisch gefertigt <br />
             ...
             der unter anderem die Uhr am Frankfurter &bdquo;Theater
             am Turm&quot; hergestellt hat ...",
	 "zeitungsartikel/GoldenYears.pdf",
	 "http://www.primeestates.de/wp-content/uploads/5-clients-login.jpg",
	 "Golden Years",
	 "http://www.primeestates.de/wp-content/uploads/5-clients-login.jpg",
	 "<a href=\"http://www.primeestates.de/clients-login/\" target=\"_blank\">&copy; Eberhard Horn </a>",
	 "http://www.openstreetmap.org/?zoom=18&mlat=50.18238&amp;mlon=8.46636&amp;layers=M",
	 $lang);

artikel( "2002-00-00", 
	 "Kronberg Ortsteil Oberh&ouml;chstadt",
	 "Kronberger Bote",
	 "Kirchturmuhr von St. Vitus - Gold f&uuml;r die Ziffern der Uhr",
	 "... und <span class=\"albrecht\"> Alexander Albrecht </span> zeigten das frisch 
restaurierte Zifferblatt ...",
	 "zeitungsartikel/Kronberg.pdf",
	 "bilder/Kronberg-st.-vitus-001x100.jpg",
	 "Kronberg St.Vitus",
	 "https://de.wikipedia.org/w/index.php?title=Datei:Kronberg-st.-vitus-001.jpg",
	 "<a href=\"https://de.wikipedia.org/w/index.php?title=Datei:Kronberg-st.-vitus-001.jpg\" target=\"_blank\">&copy;Dontworry </a>",
	 "http://www.openstreetmap.org/?mlat=50.18232&amp;mlon=8.54234&amp;zoom=15&amp;layers=M",
	 $lang);

artikel( "Museum Naunhof", 
	 "Naunhof",
	 "Zeitung",
	 "Es tickt und tickt und tickt",
	 "",
	 "zeitungsartikel/Museum.pdf",
	 "bilder/Weule.jpg",
	 "Weule",
	 "http://www.radiomuseum.org/museum/d/turmuhren-museum-naunhof/images/turmuhren_museum_naunhof_110814_04.jpg",
	 "",
	 "http://www.openstreetmap.org/?mlat=51.2787&amp;mlon=12.588600&amp;zoom=18&amp;layers=M",
	 $lang);

artikel( "Datum", 
	 "Ort",
	 "Blatt",
	 naechster_artikel( $lang),
	 "Zitat",
	 "#verweis",
	 "bilder/Alex.jpg",
	 "Alexander Albrecht &#xA733lex &#xA732lbrecht",
	 "bilder/Alex.jpg",
	 "<a href=\"\" target=\"_blank\">&copy; </a>",
	 "",
	 $lang);

?>

      <table width="90%" border="0" align="center" cellspacing="10">
	<tr>
	  <td><p>Zum Anzeigen der PDF-Dateien 
	      ben&ouml;tigen Sie den Acrobat Reader, den Sie <a href="http://www.adobe.de/products/acrobat/readstep2.html" target="_blank">hier</a> 
	      kostenlos herunterladen k&ouml;nnen.</p>
	  </td>
	</tr>
      </table>
  </body>
</html>


