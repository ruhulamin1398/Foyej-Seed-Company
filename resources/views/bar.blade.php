
<div style="padding :100px;"><?php

use \Milon\Barcode\DNS1D;

$d = new DNS1D();
$d->setStorPath(__DIR__."/cache/");
echo $d->getBarcodeHTML("881", "C39");
echo "</br>1 </br> </br>";echo "</br> </br> </br>";
echo $d->getBarcodeHTML("882", "C39");
echo "</br>2 </br> </br>";echo "</br> </br> </br>";
echo $d->getBarcodeHTML("883", "C39");
echo "</br>3 </br> </br>";echo "</br> </br> </br>";
echo $d->getBarcodeHTML("884", "C39");
echo "</br>4 </br> </br>";echo "</br> </br> </br>";
echo $d->getBarcodeHTML("885", "C39");
echo "</br>5 </br> </br>";echo "</br> </br> </br>";
?>
</div>