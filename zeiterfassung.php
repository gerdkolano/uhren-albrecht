<?php 
include("head.php");
?>

<table width="90%" cellspacing="5" align="center">
  <tr>
    <td>
      <div class="mittig"><strong><?php ZeiterfassungStechuhren( $lang);?></strong></div>
    </td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellpadding="10">
  <tr> 
    <td><img src="bilder/Stechuhr1.jpg"   alt="Zeitstempler Stechuhr" title="Zeitstempler Stechuhr" width="142" height="119"></td>
    <td rowspan="2"><p><?php wirBieten( $lang);?></p>
      <ul>
        <li><?php ReparaturStechuhren( $lang);?></li>
        <li><?php Verbrauchsmaterialen( $lang);?></li>
        <li><?php NeueZeiterfassungsSysteme( $lang);?></li>
        <li><?php gebrauchteArbeitszeitkontrollapparate( $lang);?></li>
      </ul></td>
  </tr>
  <tr> 
    <td><img src="bilder/Stechuhr2.jpg"  alt="saldierende Stechuhr" title="saldierende Stechuhr" width="142" height="124"></td>
  </tr>
</table>

<table width="90%" border="0" align="center" cellpadding="10">
  <tr> 
    <td colspan="2">
      <div class="kopfzeile"><strong><?php personalzeiterfassung( $lang);?></strong></div>
    </td>
  </tr>
  <tr> 
    <td><div class="links"><img src="bilder/ptr.jpg"  alt="ptr" title="ptr" width="142" height="153"></div></td>
    <td><p><strong>
<?php rechnendeStempeluhr( $lang)?>

</strong>
</p>
      <ul>
        <?php strichcodierteStempelkarte( $lang);?>
      </ul>
    </td>
  </tr>
  <tr> 
    <td><img src="bilder/qr550.jpg"  alt="qr550" title="qr550" width="154" height="146"></td>
    <td><p><strong><?php registrierendeStempeluhr( $lang);?></strong></p>
      <ul>
        <?php Monatskartedoppelseitig6spaltig( $lang);?>
      </ul>
    </td>
  </tr>
  <tr> 
    <td><img src="bilder/QR411.jpg"  alt="QR411" title="QR411" width="154" height="185"></td>
    <td><p><strong><?php registrierendeStempeluhr( $lang);?></strong></p>
      <ul>
        <?php stechuhrMitAnaloganzeige( $lang);?>
      </ul>
    </td>
  </tr>
  <tr> 
    <td><img src="bilder/qr350.jpg"  alt="qr350" title="qr350" width="154" height="190"></td>
    <td><p><strong><?php registrierendeStempeluhr( $lang);?></strong></p>
      <ul>
        <?php Monatskartedoppelseitig4spaltig( $lang);?>
      </ul>
    </td>
  </tr>
  <tr> 
    <td><img src="bilder/tp-10.jpg"  alt="tp-10" title="tp-10" width="154" height="200"></td>
    <td>
      <p><strong><?php Zeitstempler( $lang);?></strong></p>
      <ul>
        <?php ZeitstemplerDetails( $lang);?>
      </ul>
    </td>
  </tr>
  <tr> 
    <td><img src="bilder/Doku-Drucker.jpg"  alt="Doku-Drucker" title="Doku-Drucker" width="154" height="185"></td>
    <td>
      <p><strong>      <?php Dokumentendrucker( $lang);?></strong></p>
      <ul>
      <?php Dokumentendruckerdetails( $lang);?>
      </ul>

</td>
  </tr>
  <tr> 
    <td colspan="2">
      <div class="mittig"><?php fragenSie( $lang);?></div>
    </td>
  </tr>
</table>
</body>
</html>
