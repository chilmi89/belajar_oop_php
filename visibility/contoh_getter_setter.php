<?php
class Person {
    private $data = [];

    // Magic method __get untuk mengambil nilai properti
    public function __get($name) {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } else {
            // Mengembalikan nilai default jika properti tidak ditemukan
            return "Properti tidak terdefinisi: " . $name;
        }
    }

    // Magic method __set untuk mengatur nilai properti
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
}

// Contoh penggunaan:
$person1 = new Person();

// Mengatur nilai properti menggunakan magic method __set()
$person1->name = "Alice";
$person1->age = 30;
// $person1->address = "Jl. Raya";


// Mengambil nilai properti menggunakan magic method __get()
echo "Nama: " . $person1->name . "<br>";  // Output: Nama: Alice
echo "Usia: " . $person1->age . "<br>";    // Output: Usia: 30

// Contoh ketika properti tidak ada
echo "Alamat: " . $person1->address . "<br>";  // Output: Properti tidak terdefinisi: address
?>