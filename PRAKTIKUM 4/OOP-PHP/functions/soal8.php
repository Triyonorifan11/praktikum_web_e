<!-- h. Implementasi Inheritance (Pewarisan) -->
<!-- https://www.duniailkom.com/tutorial-belajar-oop-php-pengertian-inheritance-pewarisan/ -->
<!-- https://www.w3schools.com/php/php_oop_inheritance.asp -->

<?php

// buat class induk: komputer
class komputer
{

    public $merk;
    public $processor;
    public $memory;

    public function beli_komputer()
    {
        return "Beli komputer baru";
    }
}

// turunkan class komputer ke laptop
class laptop extends komputer
{

    public function lihat_spec()
    {
        return "merk: $this->merk, processor: $this->processor, 
     memory: $this->memory";
    }
}

// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();

// isi property objek
$laptop_baru->merk = "acer";
$laptop_baru->processor = "intel core i5";
$laptop_baru->memory = "8 GB";

//panggil method objek
echo $laptop_baru->beli_komputer();
echo "<br />";
echo $laptop_baru->lihat_spec();

?>

<?php
class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit
{
    public function message()
    {

        echo "Am I a fruit or a berry? ";
    }
}
$strawberry = new Strawberry("Strawberry", "red");
echo "<br><br><br>";
$strawberry->message();
$strawberry->intro();
?>