<?php

require_once 'App/init.php';

// $produk1 = new Komik("Naruto","Mashashi Kishimoto","Shonen Jump",30000,100);
// $produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",250000,50);

// $cetakProduk = new cetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();
// echo "<hr>";
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ServiceUser();
echo "<hr>";
new ProdukUser();

?>