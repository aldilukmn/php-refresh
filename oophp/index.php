<?php

class Car {
    public $name, 
            $color, 
            $brand,
            $price;

    public function __construct($name, $color, $brand, $price) {
        $this->name = $name;
        $this->color = $color;
        $this->brand = $brand;
        $this->price = $price;
    }

    public function details() {
        return "Nama Mobil : $this->name <br>
        Merek Mobil : $this->brand <br>
        Harga Mobil : $this->price <br>
        Warna Mobil : $this->color";
    }
     
            
    public function incSpeed() {

    }

    public function descSpeed() {

    }

    public function changeTransmition() {

    }
}

$car1 = new Car("Auuww", "Blue", "Honda", 4000);

echo $car1->details();


?>