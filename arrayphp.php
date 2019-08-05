<?php
$arrBuah = array ("Mangga", "Apel", "Pisang", "Jeruk");
echo $arrBuah[1]; //Apel
echo $arrBuah[3]; //Jeruk
$arrWarna = array();
$arrWarna[] = "Merah";
$arrWarna[] = "Biru";
$arrWarna[] = "Hijau";
$arrWarna[] = "Putih";
echo $arrWarna[4]; //Putih
echo $arrWarna[1]; //Biru

echo "<br><br><br>";
$arrWarna = array ("Blue","Black","Red","Yellow","Green");
echo "Menampilkan isi array dengan for : <br>";
for ($i=0; $i<count($arrWarna); $i++) {
echo "Do you like <font color=$arrWarna[$i]>". $arrWarna[$i]
."</font> ?<br>";
}
echo "<br>Menampilkan isi array dengan foreach : <br>";
foreach ($arrWarna as $warna) {
echo "Do you like <font color=$warna>". $warna ."</font>
?<br>";
}

?>