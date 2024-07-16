<?php


function autoload($class) {
    $file = __DIR__ . '/Produk/' . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    } else {
        echo "File $file tidak ditemukan.";
    }
}

spl_autoload_register('autoload');
