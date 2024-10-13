<!-- I prodotti saranno oltre al cibo, anche giochi, cucce, etc. -->

<?php
 include_once __DIR__ .('/category.php');

class Product {
    //! Variabili della stanza: dettagli dei prodotti, come immagine, titolo, prezzo...
    public $image;
    public $name;
    public $category;
    public $description;
    public $price;
    
    //! Construct
    function __Construct(string $image, string $name, Category $category, string $description,  $price){
        $this -> image = $image;
        $this -> name = $name;
        $this -> category = $category;
        $this -> description = $description;
        $this -> price = $price;
    }

    //! Method
    public function getImage(){
        return "$this->image";
    }

    public function getName(){
        return "$this->name";
    }

    public function getCategory(){
        return "$this->category";
    }

    public function getDescription(){
        return "$this->description";
    }

    public function getPrice(){
        return "$this->price";
    }

    //TODO EXCEPTION
    public function setPrice($price){
        if($price > 0){
            $this->price = $price;
        }else {
            throw new invalidArgumentException("Il prezzo non è valido!");
        }
    }

}
  
 


