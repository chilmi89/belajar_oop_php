<?php

class Produk_2
{
    // properti
    public $nama,
        $harga,
        $merk,
        $type;

    // fungsi yang otomatis dijalankan saat class di panggil 
    // fungsi ini bernama __construct()
    // menerima parameter yang dikirim dari objek
    public function __construct($nama, $harga, $merk , $type)
    {   
        // mengisi properti dengan parameter yang dikirim dari objek
        // $this digunakan untuk mengakses properti dari class
        $this->nama = $nama;
        $this->harga = $harga;
        $this->merk = $merk;
        $this->type = $type;
    }

    public function cekNama()
    {
        // menggunakan this untuk mencetak properti dari class
        // dengan mengembalikan nilai dari fungsi cekNama() dengan return
        return "nama produk: " . $this->nama.
            "<br>" . "merk: " .  $this->merk.
            "<br>"."type". ":". $this->type.
            "<br>"."harga". ":". $this->harga;
    }
}

class cetak_Produk{
    // fungsi untuk mencetak objek dari class Produk_2
    // hanya menerima parameter dari class Produk_2 dan objek dari class Produk_2
    public function cetak_info(Produk_2 $produk){
        $ctk = "{$produk->cekNama()}";
        return $ctk;
    }
}


// membuat objek yang memanggil class dengan memasukan parameter yg terdapat dalam class
// parameter yang dimasukan ke class sebagai variabel
// variabel yang ditangkap akan masuk kedalam fungsion construct
$produksi2 = new Produk_2("lenovo ideaped gaming 2 ", 120000, "lenovo", "gaming");
$produksi1 = new Produk_2("Asus Tuf Gaming ", 12000, "Asus", "gaming");

// echo $produksi1->cekNama();
// echo "<br>";
// echo "<br>";
// echo $produksi2->cekNama();


echo "<br>";
// membuat variabel baru dengan nama cetak dan mengisi dengan class cetak_Produk
$cetak = new cetak_Produk();
// mengakses fungsi cetak dari class cetak_Produk dengan mengirim parameter $produksi1
echo $cetak->cetak_info($produksi1);
echo "<br>";
echo "<br>";
echo $cetak->cetak_info($produksi2);