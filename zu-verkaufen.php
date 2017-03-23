<?php 
include("head.php");
?>
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
?>

<p>&nbsp;</p>
<table width="79%" cellspacing="5" align="center">
  <tr> 
    <td colspan="2">
    <h3 class="mittig"><strong><?php wir_verkaufen( $lang);?></strong></h3>
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

<table width="90%" border="0" align="center" cellpadding="10">
  <tr> 
    <td>
      <ul>
        
    <?php vintage_angebot( $lang);?>

      </ul>
    </td>
    <td>

<?php 
//figurecaption( "bilder/Wanduhr.jpg", "Wanduhr", wanduhr( $lang));
figuretable( "bilder/vintage-clock-0.png", "Vintage Clock", vintage_clock_0( $lang));
?>

    </td>
  </tr>

  <tr>
    <td><div class="mittig"><img src="bilder/vintage-clock-2a.png" alt="Vintage Clock 1" title="Vintage Clock 1" height="480"></div></td>
    <td><div class="mittig"><img src="bilder/vintage-clock-1.png"  alt="Vintage Clock 2" title="Vintage Clock 2" height="480"></div></td>
  </tr>

</table>
</body>
</html>
