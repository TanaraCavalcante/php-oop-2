<!-- I prodotti sono categorizzati, le categorie sono Cani o cat. -->

<?php
//! Creo le variabili della stanza
class Category {
    public $dog; //icona?
    public $cat; //icona?

    //! Cronstruct
    function __Contruct(string $dog, string $cat){
        $this->dog = $dog;
        $this->cat = $cat;
    }

    //! Method
    public function getDog(){
        return "$this-> dog";
    }

    public function getCat(){
        return "$this-> cat";
    }

}