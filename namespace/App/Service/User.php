
<!-- penggunaaan name space untuk User.php dari App/Servis -->
<?php namespace App\Service;

class User{
    public function __construct() {
        echo "Ini adalah kelas User dari namespace" . __CLASS__;
    }
}
?>
