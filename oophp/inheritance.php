<?php

class Produk{
    public $judul = "judul", 
           $penulis = "Penulis",
           $penerbit = "penerbit",
           $harga = 0,
           $jmlHalaman = 0,
           $waktuMain = 0,
           $tipe;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain; 
        $this->tipe = $tipe;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if($this->tipe == "game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        
        return $str;
    }
}


class Komik extends Produk{

}


class cetakInfoProduk{
    public function cetak( Produk $produk){
        $str = $produk->judul." | ".$produk->getLabel()." (Rp. ".$produk->harga.")";
        return $str;
    }
}

$produk1 = new Komik("Naruto","Mashashi Kishimoto","Shonen Jump",30000,100,110,"komik");



$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer",250000,0,50,"game");

echo $produk1->getInfoLengkap();

?>