<!-- k. implementasi Static Property dan Static Method -->
<!-- https://www.w3schools.com/php/php_oop_static_properties.asp -->


<?php
// buat class laptop
class laptop
{
    public $merk;
    public $pemilik;

    // static property
    public static $harga_beli;

    //static method
    public static function beli_laptop()
    {
        return "Beli Laptop";
    }
}

// set static property
laptop::$harga_beli = number_format(4000000, 0, '.', '.');

// panggil static method
echo laptop::beli_laptop();

echo "<br />";

// get static property
echo "harga beli : Rp" . laptop::$harga_beli;
?>



<!-- Cara Mengakses Static Property dan Static Method Dari Class Itu Sendiri -->
<?php
// buat class laptop
class laptop2
{
    public $merk;
    public $pemilik;

    // static property
    public static $harga_beli;

    //static method
    public static function beli_laptop()
    {
        return "Beli laptop seharga Rp" . self::$harga_beli;
    }
}

// set static property
laptop2::$harga_beli = 4000000;

// panggil static method
echo laptop2::beli_laptop();
?>