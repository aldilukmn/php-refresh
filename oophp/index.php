<?php

class Car {
    public $name = "Raurr", 
            $color = "Red", 
            $brand = "BMW",
            $price = "$3000";

    public function details() {
        return "Nama Mobil : $this->name <br>
        Merek Mobil : $this->brand <br>
        Harga Mobil : $this->price";
    }
     
            
    public function incSpeed() {

    }

    public function descSpeed() {

    }

    public function changeTransmition() {

    }
}

$mobil1 = new Car;
$detail = $mobil1->details();x`
$nama = $mobil1->name = "Duarrr";
$merek = $mobil1->brand = "Honda";
$harga = $mobil1->price = "$2500";

echo "Nama Mobil : $nama <br>
        Merek Mobil : $merek <br>
        Harga Mobil : $harga";

echo "<hr>";

echo $detail;


?>