<!-- l. Implementasi Konstanta Class dalam Pemrograman Objek -->
<!-- https://www.w3schools.com/php/php_oop_constants.asp -->

<?php
// buat class laptop
class laptopini
{
    // buat konstanta
    const DOLLAR = '12000';
}

// panggil konstanta class
echo "Harga dollar saat ini = Rp. " . laptopini::DOLLAR;
// hasil: Harga dollar saat ini = Rp. 12000

echo "<br>";
// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptopini();

// panggil konstanta class
echo "Harga dollar saat ini = Rp. " . $laptop_baru::DOLLAR;
// hasil: Harga dollar saat ini = Rp. 12000
?>


<!-- Cara Mengakses Konstanta Class dari dalam Class itu Sendiri -->
<?php
// buat class laptop
class laptop
{

    // buat konstanta
    const DOLLAR = '12000';

    // buat method
    public function beli_laptop($harga)
    {
        return "Beli Komputer Baru, Rp. " . $harga * self::DOLLAR;
    }
}
echo "<br> <br>";
// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();

echo $laptop_baru->beli_laptop(400);
// hasil: Beli Komputer Baru, Rp. 4800000
?>



<!-- Cara Mengakses Konstanta Class milik Parent Class -->
<?php
echo "<br> <br>";
// buat class komputer
class komputer
{
    // buat konstanta class komputer
    const DOLLAR = '11000';
}

// turunkan class komputer ke class laptop
class laptop2 extends komputer
{
    // buat konstanta class laptop
    const DOLLAR = '12000';

    // buat method dengan konstanta class komputer
    public function beli_komputer_baru($harga)
    {
        return "Beli Komputer Baru, Rp ." . $harga * parent::DOLLAR;
    }

    // buat method dengan konstanta class laptop
    public function beli_laptop_baru($harga)
    {
        return "Beli Komputer Baru, Rp ." . $harga * self::DOLLAR;
    }
}

// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop2();

echo $laptop_baru->beli_laptop_baru(400);
echo "<br />";
echo $laptop_baru->beli_komputer_baru(400);
?>