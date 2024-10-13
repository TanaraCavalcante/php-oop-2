<?php
//!Includo il parent
include_once __DIR__ .('/product.php');
include_once __DIR__.('/../traits/materiable.php');

//! La class Toy figlio di Product, o sia per inserirlo dentro del parent devo usare "extends"
class Toy extends Product{
    Use Materiable;

    public $type;

    //!constructor
    function __construct(string $image, string $name, Category $category, string $description, int $price, string $type, string $material){
        parent::__construct($image, $name, $category, $description, $price);
        $this->type = $type;
    }

    //!Method
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