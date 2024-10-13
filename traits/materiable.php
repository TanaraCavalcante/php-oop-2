<?php

trait Materiable {
    public $material;

    function getMaterial(){
        return "$this->material";
    }
}