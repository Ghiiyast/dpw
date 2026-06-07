<?php
// kelas/buah2.php (Versi Sudah Diperbaiki)
class Buah2 
{
    public $name;
    public $color;
    public $weight;

    public function set_name($n) 
    {
        $this->name = $n;
    }

    public function set_color($n) 
    {
        $this->color = $n;
    }

    public function set_weight($n) 
    {
        $this->weight = $n;
    }
}

$mango = new Buah2();
$mango->set_name('Mango');   
$mango->set_color('Yellow'); 
$mango->set_weight('300');   

echo "Nama Buah: " . $mango->name . "<br>";
echo "Warna: " . $mango->color . "<br>";
echo "Berat: " . $mango->weight . " gram<br>";