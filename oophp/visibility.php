<?php

class Produk{
    public $judul = "judul", 
           $penulis = "Penulis",
           $penerbit = "penerbit";
    protected $diskon = 0;
    private $harga;

    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getHarga(){
      return $this->harga - ( $this->harga*$this->diskon / 100 );
    }

    public function getInfoProduk(){
        
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;
    }
}


class Komik extends Produk{
    public $jmlHalaman;

    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlHalaman ){
      parent::__construct($judul, $penulis, $penerbit, $harga);

      $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk(){
        $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct( $judul, $penulis, $penerbit, $harga, $waktuMain ){
      parent::__construct($judul, $penulis, $penerbit, $harga);

      $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $str = "Game : ". parent::getInfoProduk() ." - {$this->waktuMain} Jam.";
        return $str;
    }
}



class cetakInfoProduk{
    public function cetak( Produk $produk){
        $str = $produk->judul." | ".$produk->getLabel()." (Rp. ".$produk->harga.")";
        return $str;
    }
}

$produk1 = new Komik("Naruto","Mashashi Kishimoto","Shonen Jump",30000,100);



$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",250000,50);

echo $produk1->getInfoProduk(). "<br>";
echo $produk2->getInfoProduk(). "<hr>";

$produk2->getDiskon(50);
echo $produk2->getHarga();

?>