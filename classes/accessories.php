<?php
//!Includo il parent
include_once __DIR__ .('/product.php');
include_once __DIR__.('/../traits/materiable.php');

//! La class Accessories figlio di Product, o sia per inserirlo dentro del parent devo usare "extends"
class Accessories extends Product{
    //TODO trait
    use Materiable;

    public $size;
   
     //!constructor
     function __construct(string $image, string $name, Category $category, string $description, $price, string $size, string $material){
        parent::__construct($image, $name, $category, $description, $price);
        $this->size = $size;
    }

    //!Method
    function getSize(){
        return "$this->size";
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