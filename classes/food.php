<?php
//!Includo il parent
include_once __DIR__ .('/product.php');

//! La class Food figlio di Product, o sia per inserirlo dentro del parent devo usare "extends"
class Food extends Product{
    public $weight;
    public $type;

    //!constructor
    function __construct(string $image, string $name, Category $category, string $description,  $price,  $weight, string $type){
        parent::__construct($image, $name, $category, $description, $price);
        $this->weight = $weight;
        $this->type = $type;
    }

     //!Method
     function getWeight(){
        return "$this->weight";
    }

    function getType(){
        return "$this->type";
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