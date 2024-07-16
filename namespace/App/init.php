<?php


// manual autoload

// require_once "Produk/InfoProduk.php";
// require_once "Produk/Produk.php";
// require_once "Produk/komik.php";
// require_once "Produk/game.php";
// require_once "Produk/CetakInfoProduk.php";
// require_once "Produk/User.php";

// require_once "service/User.php";

// spl_autoload_register(function($class){

//     $class = explode("\\", $class);
//     $class = end($class);

//     require_once __DIR__ . "/Produk/$class.php";
// });


// spl_autoload_register(function($class){

//     $class = explode("\\", $class);
//     $class = end($class);

//     $file = __DIR__ . "/Service/" .$class.".php";
//     if (file_exists($file)) {
//         require_once $file;
//     } else {
//         $file = __DIR__ . "/Produk/" .$class.".php";
//         if (file_exists($file)) {
//             require_once $file;
//         }
//     }
// });
// mengirimkan parameter untuk service ke index.php dengan namespace
spl_autoload_register(function($class){

    $class = explode("\\", $class);
    $class = end($class);

    $file = __DIR__ . "/Service/" .$class.".php";
    if (file_exists($file)) {
        require_once $file;
    }
});


// mengirimkan parameter untuk produk ke index.php dengan namespace
spl_autoload_register(function($class){
    
    $class = explode("\\", $class);
    $class = end($class);

    $file = __DIR__ . "/Produk/" .$class.".php";
    if (file_exists($file)) {
        require_once $file;
    }
});


// spl_autoload_register(function($class){
//     // Ubah namespace separator \ menjadi directory separator /
//     $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
//     // Hapus prefix 'App/' dari path jika ada
//     if (strpos($class, "App" . DIRECTORY_SEPARATOR) === 0) {
//         $class = substr($class, strlen("App" . DIRECTORY_SEPARATOR));
//     }
//     require_once __DIR__ . "/$class.php";
// });

?>  