<?php

echo "<br>". date("d/m/Y H:i:s");

echo "<br>". date("F j, Y, g:i a");

echo "<br>". date("d.m.y");

echo "<br>". date("Ymd");

echo "<br>". date('j-m-y, it is w Day z ');

echo "<br>". date('\i\t \i\s \t\h\e jS \d\a\y.');

echo "<br>". date("D M j G:i:s T Y");
echo "<br>". date("H:i:s");

echo "<br><br><br>Indonesian Calendar!!<br><br>";



$arrDay = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis",
"Jum'at", "Sabtu");
$day = date ("w");

echo "Hari ini hari : <b>" . $arrDay[$day]."</b>";


?>