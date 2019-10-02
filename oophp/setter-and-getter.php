<?php

class Produk{
    private $judul = "judul", 
           $penulis = "Penulis",
           $penerbit = "penerbit",
           $harga,
           $diskon;

    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul( $judul ){
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis( $penulis ){
      $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ){
      $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function setDiskon( $diskon ){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }

    public function setHarga( $harga ){
        $this->harga = $harga;
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

$produk2->setDiskon(50);
echo $produk2->getHarga()."<hr>";

$produk1->setPenulis("Mochammad Qaysa");
echo $produk1->getPenulis();


?>