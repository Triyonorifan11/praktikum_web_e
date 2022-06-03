<!-- o. Implementasi Object Interface -->
<!-- https://www.duniailkom.com/tutorial-belajar-oop-php-pengertian-object-interface-dalam-pemrograman-berbasis-objek/ -->
<!-- https://www.w3schools.com/php/php_oop_interfaces.asp -->


<?php
// Interface definition
interface Animal
{
    public function makeSound();
}

// Class definitions
class Cat implements Animal
{
    public function makeSound()
    {
        echo " Meow ";
    }
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo " Bark ";
    }
}

class Mouse implements Animal
{
    public function makeSound()
    {
        echo " Squeak ";
    }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach ($animals as $animal) {
    $animal->makeSound();
}

?>
<br><br><br>
<!-- Interface bisa di Turunkan (Inherit) -->

<?php
interface mouse2
{
    public function klik_kanan();
    public function klik_kiri();
}

interface mouse_gaming extends mouse2
{
    public function ubah_dpi();
}

class laptop implements mouse_gaming
{
    public function klik_kanan()
    {
        return "Klik Kanan...";
    }

    public function klik_kiri()
    {
        return "Klik Kiri...";
    }

    public function ubah_dpi()
    {
        return "Ubah settingan DPI mouse";
    }
}

$laptop_baru = new laptop();
echo $laptop_baru->ubah_dpi();
// Ubah settingan DPI mouse
?>