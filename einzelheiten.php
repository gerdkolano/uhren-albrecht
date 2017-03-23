<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Einzelheiten</title>
  </head>

  <body>
    <h3>Wo befindet sich diese Seite?</h3>

<?php
echo "Referer: " . $_SERVER["REMOTE_ADDR"] . "<br>";
echo $_SERVER["SCRIPT_URI"] . "<br>";
echo "Server: " . $_SERVER["SERVER_ADDR"] . ":";
echo $_SERVER["SERVER_PORT"];
echo " Software: " . $_SERVER["SERVER_SOFTWARE"] . " <br />";
echo system( "dig +short -x " . $_SERVER["SERVER_ADDR"]) . "<br>";
echo $_SERVER["SCRIPT_FILENAME"] . "<br>";

printf( "%04d-%02d-%02d ", date( 'Y'), date( 'n'), date( 'd'));
printf( "%02d.%02d.%02d",  date( 'H'), date( 'i'), date( 's'));

?>

<br />
<br />

<?php
$headers = apache_request_headers();

foreach ($headers as $header => $value) {
	    echo "$header: $value <br />\n";
}
flush();
$headers = apache_response_headers();

foreach ($headers as $header => $value) {
	    echo "$header: $value <br />\n";
}

?>

<pre>
<?php
  ob_end_flush();
  print_r(apache_response_headers());
?>
</pre>


<pre>
<?php
  ob_end_flush();
  print_r(apache_request_headers());
?>
</pre>

<br />
<br />

<?php

foreach($_SERVER as $i=>$val) {  
  echo $i . " => " . $val . "<br>";  
}  
?>

<br />

<?php
setlocale (LC_ALL, 'pl_PL');
echo date( 'D') . " ";
echo date( 'd') . ".";
echo date( 'n') . ".";
echo date( 'Y') . " ";
echo date( 'H') . ":";
echo date( 'i') . ":";
echo date( 's') . " ";
echo "<br>";
echo (date( 'w') + 6) % 7 + 1 . ".Tag der ";
echo date( 'W') . ".Woche ";
echo "<br>";

phpinfo();

?>

    <hr>
    <address><a href="mailto:gerdkolano@wp.pl">CEO</a></address>
<!-- Created: Fri Jan 15 23:43:49 CET 2010 -->
<!-- hhmts start -->
Last modified: Sat Jan 16 10:25:08 CET 2010
<!-- hhmts end -->
  </body>
</html>
<!-- Keep this comment at the end of the file
Local variables:
mode: php
End:
-->
