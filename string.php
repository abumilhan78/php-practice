<?php
$str = "Everything i do, i do it for YOU";
echo "<b>Real String</b> : $str";
echo "<br><b>strtolower()</b> : ". strtolower($str);
echo "<br><b>strtoupper()</b> : ". strtoupper($str);
echo "<br><b>ucfirst() :</b> ". ucfirst($str);
echo "<br><b>ucwords() :</b> ". ucwords($str);
echo "<br><b>strrev() :</b> ". strrev($str);
echo"<br><b>Jumlah karakter</b> : ". strlen($str);

echo "<br><br><br>ASCII Char!<br><br>";
echo "Menampilkan bilangan ASCII";
for ($i=1; $i<=256; $i++) {
echo "<br>$i.\t". chr($i);
}

echo "<br><br><br>Strip Tags!<br><br>";
$string = "<b><u>Everything I do, I do it for you</u></b>";
echo $string."<br>";
//no tag html
echo strip_tags ($string). "<br>";
//allow tag <u>
echo strip_tags ($string,"<u>")."<br>";
//tampil apa adanya
echo htmlspecialchars ($string)."<br>";
//tampil apa adanya
echo htmlentities ($string);

?>


