<?php
include 'header.php';
?>
<h4>DOWNLOAD</h4>
Download ETI Add URL PHP Script
<br>Submit URL PHP Script<br><br>

<a href="http://eti.pe.hu/dnl.php?f=eti-add-url-script.zip" target="_blank">Download source code of this project</a>

<?php
$url  = 'http://eti.pe.hu/downloads.log';
$path = 'downloads.log';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);

curl_close($ch);

file_put_contents($path, $data);

$lines = count(file($path));
echo "- dnl: $lines times";
?>
<div>
<br />
<h4>DONATE</h4>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="VCPCDUM6WPW4W">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

If you like this free script and you want to help, well you can use the following button to donate some money. Your Name will be here and in my wall of sponsors. Thank you!<br>

<center>
<p><a href="http://eti.free.bg" target="_blank">ETI</a> <?php echo date("Y") ; ?></p>
</center>
</div>

</body>
</html>
