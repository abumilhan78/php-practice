<?php

abstract class Buah{
    private $warna;

    abstract public function makan();

    public function setWarna( $warna ){
        $this->warna = $warna;
    }
}


?>