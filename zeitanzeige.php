<?php 
include("head.php");
?>

<br>
<table width="80%" border="3" align="center" cellpadding="10" bordercolor="#0000FF">
  <tr>
    <td><div class="blocksatz"><?php dcf77neu( $lang); ?></div>
    </td>
  </tr>
</table>
<table width="90%" cellspacing="5" align="center">
  <tr> 
    <td>
      <div class="mittig"><strong><?php informationsdosplays( $lang);?></strong></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center">
  <tr>
    <td><div class="mittig"><strong>
      <?php werbungmitlcd( $lang);?>
    </strong></div></td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellspacing="10">
  <tr> 
    <td><p class="blocksatz"><?php  lcdallgemein( $lang);?></td>
    <td><div class="mittig"><img src="bilder/Beinuhr.jpg"  alt="Beinuhr" title="Beinuhr" width="131" height="283"></div></td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellspacing="10">
  <tr>
    <td><div class="blocksatz">
    <?php dateneingabe( $lang);?></div></td>
    <td><img src="bilder/nis3.jpg"  alt="nis3" title="nis3" width="366" height="227"></td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellspacing="10">
  <tr>
    <td>
      <div class="blocksatz"><?php wasistlcd( $lang);?></div>
    </td>
    <td>
      <div class="mittig"><img src="bilder/nis4.jpg"  alt="nis4" title="nis4" width="283" height="235"></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellspacing="10">
  <tr>
    <td>
      <div class="blocksatz"><?php waskannangezeigtwerden( $lang);?></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellspacing="10">
  <tr> 
    <td><div class="mittig"><img src="bilder/nis2.jpg"  alt="nis2" title="nis2" width="283" height="214"></div></td>
    <td><div class="mittig"><img src="bilder/nis5.jpg"  alt="nis5" title="nis5" width="329" height="214"></div></td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellspacing="10">
  <tr>
    <td>
      <div class="mittig"><?php blickfang( $lang);?></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellspacing="10">
  <tr>
    <td><div class="mittig"><img src="bilder/nis6.jpg"  alt="nis6" title="nis6" width="299" height="214"></div></td>
    <td><div class="mittig"><img src="bilder/nis7.jpg"  alt="nis7" title="nis7" width="244" height="214"></div></td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellspacing="10">
  <tr>
    <td>
      <div class="links"><p class="blocksatz"><?php lcdvorteile( $lang);?></p></div>
    </td>
    <td><div class="mittig"><img src="bilder/24Grad.jpg"  alt="24Grad" title="24Grad" width="185" height="336"></div></td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellspacing="10">
  <tr>
    <td><div class="mittig"><strong>
      <?php zeitanzeigenund( $lang);?>
</strong></div></td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellspacing="10">
  <tr>
    <td width="35%"><div class="mittig"><img src="bilder/Gorgy1.jpg"  alt="Gorgy1" title="Gorgy1" width="198" height="54"></div></td>
    <td width="65%">&nbsp;</td>
  </tr>
  <tr>
    <td><div class="mittig"><img src="bilder/Solari1.jpg"  alt="Solari1" title="Solari1" width="198" height="67"></div></td>
    <td>
      <p class="blocksatz"><?php wirliefernzeitanzeigenund( $lang);?></p>
    </td>
  </tr>
  <tr>
    <td><div class="mittig"><img src="bilder/Gorgi2.jpg"  alt="Gorgi2" title="Gorgi2" width="198" height="43"></div></td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellspacing="10">
  <tr>
    <td><div class="mittig"><img src="bilder/quasar.gif"  alt="quasar" title="quasar" width="170" height="84"></div></td>
    <td><div class="mittig"><img src="bilder/Solari2.jpg"  alt="Solari2" title="Solari2" width="134" height="156"></div></td>
    <td><div class="mittig"><img src="bilder/solari1.gif"  alt="solari1" title="solari1" width="177" height="100"></div></td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellspacing="10">
  <tr>
    <td><div class="mittig"><img src="bilder/Kienzle.gif"  alt="Kienzle" title="Kienzle" width="850" height="180"></div></td>
  </tr>
  <tr>
    <td><div class="mittig">
<?php if ($lang == "en") { echo "
";} elseif ($lang == "pl") { echo "
W razie w&#261;tpliwo&#347;ci prosz&#281; do nas zadzwoni&#263;!
";} else { echo "
Fragen Sie 
        telefonisch bei uns an! 
";}?>
</div></td>
  </tr>
</table>
</body>
</html>
