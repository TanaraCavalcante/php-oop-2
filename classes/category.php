<!-- I prodotti sono categorizzati, le categorie sono Cani o cat. -->

<?php
//! Creo le variabili della stanza: con name e icona
class Category {
    public $name; 
    public $icon; 

    //! Cronstruct
    function __Contruct(string $name, string $icon){
        $this->name = $name;
        $this->icon = $icon;
    }

    //! Method
    public function getName(){
        return "$this-> name";
    }

    public function getIcon(){
        return "$this-> icon";
    }
}
    
  





