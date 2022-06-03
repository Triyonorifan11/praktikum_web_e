<!-- j. Implementasi Constructor dan Destructor padaa Parent Class -->
<!-- https://www.duniailkom.com/tutorial-belajar-oop-php-cara-mengakses-constructor-dan-destructor-parent-class/ -->


<?php
// buat class komputer
// class komputer
// {

//     // buat constructor class komputer
//     public function __construct()
//     {
//         echo "Constructor dari class komputer <br />";
//     }

//     // buat destructor class komputer 
//     public function __destruct()
//     {
//         echo "Destructor dari class komputer <br />";
//     }
// }

// // turunkan class komputer ke laptop
// class laptop extends komputer
// {
// }

// // turunkan class laptop ke chromebook
// class chromebook extends laptop
// {
// }
// // buat objek dari class chromebook (instansiasi)
// $gadget_baru = new chromebook();

// echo "Belajar OOP PHP <br />";



// buat class komputer
class komputer
{

    // buat constructor class komputer
    public function __construct()
    {
        echo "Constructor dari class komputer <br />";
    }

    // buat destructor class komputer
    public function __destruct()
    {
        echo "Destructor dari class komputer <br />";
    }
}

// turunkan class komputer ke laptop
class laptop extends komputer
{

    // buat constructor class laptop 
    public function __construct()
    {
        echo "Constructor dari class laptop <br />";
        parent::__construct();
    }

    // buat destructor class laptop
    public function __destruct()
    {
        echo "Destructor dari class laptop <br>";
        parent::__destruct();
    }
}

// turunkan class laptop ke chromebook
class chromebook extends laptop
{

    // buat constructor class chromebook
    public function __construct()
    {
        echo "Constructor dari class chromebook <br />";
        parent::__construct();
    }

    // buat destructor class chromebook 
    public function __destruct()
    {
        echo "Destructor dari class chromebook <br />";
        parent::__destruct();
    }
}
// buat objek dari class chromebook (instansiasi)
$gadget_baru = new chromebook();

echo "Belajar OOP PHP <br />";


?>