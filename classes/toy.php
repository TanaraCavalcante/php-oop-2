<?php
//!Includo il parent

include __DIR__ .('/product.php');

//! La class Toy figlio di Product, o sia per inserirlo dentro del parent devo usare "extends"
class Toy extends Product{
    public $type;
    public $material;

    //!constructor
    function __construct(string $image, string $name, Category $category, string $description, int $price, int $weight, string $material){
        parent::__construct($image, $name, $category, $description, $price);
        $this->type = $type;
        $this->material = $material;
    }

    //!Method
    function getType(){
        return "$this->type";
    }

    function getMaterial(){
        return "$this->material";
    }
}