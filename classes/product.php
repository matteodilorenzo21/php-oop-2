<?php

class Product
{
    public $image;
    public $name;
    public $description;
    public $price;
    public $category;


    public function __construct($image, $name, $description, $price, $category)
    {
        $this->image = $image;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
    }
}
