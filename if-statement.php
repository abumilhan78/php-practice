<?php
$nilai = 50;
if ($nilai >= 60) {
echo "Nilai Anda $nilai, Anda LULUS";
} else {
echo "Nilai Anda $nilai, Anda GAGAL";
}

//Memeriksa suatu variabel ada atau tidak

$user="";
if (!isset($user)) {
echo "Variabel tidak ada/belum terbentuk";
} else {
echo "Variabel ada";
}

?>