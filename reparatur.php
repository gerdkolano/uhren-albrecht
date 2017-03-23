<?php 
include("head.php");
?>

<p>&nbsp;</p><table width="79%" cellspacing="5" align="center">
  <tr> 
    <td colspan="2">
      <h3 class="mittig"><strong><?php muenzpruefer( $lang);?></strong></h3>
      <p class="links"><?php geldautomaten( $lang);?></p>
    </td>
  </tr>
  <tr>
    <td>
      <div class="mittig"><strong>

<?php reparatur( $lang)?>

</strong></div>
    </td>
  </tr>
</table>

<table width="90%" cellspacing="5" align="center">
  <tr>
    <td> 
      <p class="bildunterschrift"><?php achtung( $lang)?></p>
    </td>
  </tr>
</table>

<table width="90%" cellspacing="5" align="center">
  <tr> 
    <td height="53"> 
      <p>

    <?php wir_reparieren( $lang);?>

</p>
    </td>
  </tr>
</table>

<table width="90%" border="0" align="center" cellpadding="10">
  <tr> 
    <td>
      <ul>
        
    <?php ruf_an( $lang);?>

      </ul>
    </td>
    <td>

<?php 
function figurecaption( $bild, $title, $caption) {
  echo "
<figure class=\"bilderrahmenlinks\">
  <img src=\"" . $bild . "\" alt=\"". $title . "\" title=\"". $title . "\" />
  <figcaption>" . $caption ."</figcaption>
</figure>
";
}

function figuretable( $bild, $title, $caption) {
  echo "
<table class=\"mittig\">
<tr><td><img src=\"" . $bild . "\" alt=\"". $title . "\" title=\"". $title . "\" /></td></tr>
<tr><td>" . $caption ."</td></tr>
</table>
";
}
$output = wanduhr( $lang);
//figurecaption( "bilder/Wanduhr.jpg", "Wanduhr", wanduhr( $lang));
figuretable( "bilder/Wanduhr.jpg", "Wanduhr", wanduhr( $lang));
?>

    </td>
  </tr>

  <tr>
    <td>
      <div class="mittig bildunterschrift">
          <img src="bilder/Echappe.jpg"  alt="Echappement" title="Echappement" width="283" height="193">  
      </div>
    </td>
    <td>
    <?php demontage( $lang);?>
    </td>
  </tr>
  <tr> 
    <td><div class="mittig bildunterschrift">
        <?php echappement( $lang);?>
        </div>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div class="mittig"><img src="bilder/Kuckuck.jpg"  alt="Kuckucksuhr" title="Kuckucksuhr" width="282" height="397"></div></td>
    <td><div class="mittig"><img src="bilder/Runde-Wanduhr.jpg"  alt="Runde Wanduhr" title="Runde Wanduhr" width="348" height="369"></div></td>
  </tr>
  <tr> 
    <td><div class="mittig"><img src="bilder/ZSL65.jpg"  alt="ZSL65" title="ZSL65" width="283" height="374"></div></td>
    <td><div class="mittig"><img src="bilder/Reisewecker.jpg"  alt="Reisewecker" title="Reisewecker" width="283" height="393"></div></td>
  </tr>
  <tr> 
    <td><div class="mittig bildunterschrift">
      <?php stechuhr( $lang);?>
      </div>
    </td>
    <td><div class="mittig bildunterschrift">
      <?php alarm( $lang);?>
      </div>
    </td>
  </tr>
  <tr>
    <td><div class="mittig"><img src="bilder/Kalender.jpg"  alt="Kalenderuhr" title="Kalenderuhr" width="287" height="295"></div></td>
    <td><div class="mittig"><img src="bilder/Glasuhr.jpg"  alt="Glasuhr" title="Glasuhr" width="147" height="295"></div></td>
  </tr>
</table>
</body>
</html>
