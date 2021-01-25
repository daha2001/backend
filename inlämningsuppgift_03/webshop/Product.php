  
<?php

class Product {
    private $name;
    private $description;
    private $price;
    private $stock;
    private $image;

    public function __construct($name, $description, $image, $price)
    {

        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->price = $price;
        $this->stock = rand(0, 50);    
    }


    public function toArray(){
        $array = array(
            "name" => $this->name,
            "description" => $this->description,
            "image" => $this->image,
            "price" => $this->price,
            "stock" => $this->stock,
        );

        return $array;
    }
}