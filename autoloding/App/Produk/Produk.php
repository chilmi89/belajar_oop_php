<?php

abstract class Produk {
    protected $judul,
           $penulis,
           $penerbit,
           $diskon = 0;
    protected $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // Setter
    public function setJudul($judul) {
        if (!is_string($judul)) {
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
    }

    // Getter
    public function getJudul() {
        return $this->judul;
    }

    // Setter
    public function setPenulis($penulis) {
        if (!is_string($penulis)) {
            throw new Exception("Penulis harus string");
        }
        $this->penulis = $penulis;
    }

    // Getter
    public function getPenulis() {
        return $this->penulis;
    }

    public function getHarga() {
        return $this->harga;
    }

    // Abstract method
    abstract public function getInfoProduk();

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }
}