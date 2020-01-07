
<div style="padding :100px;"><?php

use \Milon\Barcode\DNS1D;

$d = new DNS1D();
$d->setStorPath(__DIR__."/cache/");
echo $d->getBarcodeHTML("01840000408", "C39");
echo "</br>01840000408 </br> </br>";echo "</br> </br> </br>";
echo $d->getBarcodeHTML("01799076632", "C39");
echo "</br>01799076632 </br> </br>";echo "</br> </br> </br>";
echo $d->getBarcodeHTML("018400004", "C39");
echo "</br>018400004 </br> </br>";echo "</br> </br> </br>";
echo $d->getBarcodeHTML("021222222", "C39");
echo "</br>021222222 </br> </br>";echo "</br> </br> </br>";
echo $d->getBarcodeHTML("018400004089", "C39");
echo "</br>018400004089 </br> </br>";echo "</br> </br> </br>";
?>
</div>