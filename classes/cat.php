<?php

require_once 'product.php';

class Cat extends Product
{

    public function __construct($name, $description, $price, $category, $image)
    {
        parent::__construct($name, $description, $price, $category, $image);
    }
}
