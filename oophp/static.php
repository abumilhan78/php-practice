<?php

class ContohStatic {
    public static $angka = 1;

    public static function halo(){
      return "Halo. ". self::$angka++ . " Kali";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo()."<hr>";
echo ContohStatic::halo();
?>

