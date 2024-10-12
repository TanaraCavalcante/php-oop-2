<?php
//!Includo il parent
include_once __DIR__ .('/product.php');

//! La class Accessories figlio di Product, o sia per inserirlo dentro del parent devo usare "extends"
class Accessories extends Product{
    public $size;
    public $material;

     //!constructor
     function __construct(string $image, string $name, Category $category, string $description, int $price, string $size, string $material){
        parent::__construct($image, $name, $category, $description, $price);
        $this->size = $size;
        $this->material = $material;
    }

    //!Method
    function getSize(){
        return "$this->size";
    }

    function getMaterial(){
        return "$this->material";
    }

    //TODO function del parent "Product"
    public function getimage(){
        return parent::getImage();
    }

    public function getName(){
        return parent::getName();
    }

    public function getCategory(){
        return parent::getCategory();
    }

    public function getDescription(){
        return parent::getDescription();
    }
    
    public function getPrice(){
        return parent::getPrice();
    }
}