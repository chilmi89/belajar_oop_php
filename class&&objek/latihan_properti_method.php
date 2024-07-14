<?php
class Produk{
    public $nama,
            $harga,
            $merk;


    public function cekNama(){
        
        // 'this' adalah keyword yang digunakan untuk merujuk pada objek saat ini dari kelas tempat 'this' digunakan.
        // Dalam konteks ini, 'this' merujuk pada objek dari kelas Produk yang memanggil metode cekNama.
        return "nama produk: " . $this->nama;
    }

}


// pemanggilan objek dan pemetaan properti
$produksi = new Produk();

$produksi->nama = "Asus Tuf Gaming ";
$produksi->harga = 12000;
$produksi->merk = "Asus";

echo "Nama Produk: " . $produksi->nama . "<br>";
echo "Harga Produk: Rp " . $produksi->harga . "<br>";
echo "Merk Produk: " . $produksi->merk . "<br>";

$produksi2 = new Produk();
$produksi2->nama = "lenovo ideaped gaming 2 ";
$produksi2->harga = 120000;
$produksi2->merk = "lenovo";


echo "<br>";
echo "nama produk: " . $produksi2->nama . "<br>";
echo "harga produk: " . $produksi2->harga . "<br>";
echo "merk produk: " . $produksi2->merk . "<br>";


echo "<br>";


$produksi3 = new Produk();
$produksi3->nama = "acer gaming";
$produksi3->harga = 120000;
$produksi3->merk = "acer";



// pemanggilan public function

echo $produksi3->cekNama();



?>