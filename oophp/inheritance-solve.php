<?php

class Mobil{
    public $nama,
           $merk,
           $warna,
           $kecepatanMaksimal,
           $jumlahPenumpang;
    
    public function tambahKecepatan(){
        return "Kecepatan Bertambah!";
    }
}

class MobilSport extends Mobil{
    public $turbo = false;

    public function jalankanTurbo(){
        $this->turbo = true;
        return "Turbo Dijalankan!";
    }
}


$mobil1 = new MobilSport();
echo $mobil1->tambahKecepatan();
echo "<br><br>";
echo $mobil1->jalankanTurbo();


?>