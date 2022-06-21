<?php 

  class Product{
    public $animal;
    public $price;
    public $description;

    public function __construct($_animal, $_price, $_description){
      $this->animal = $_animal;
      $this->_price = $_price;
      $this->_description = $_description;
    }

    public function getName(){
      return $this->name;
    }
    public function getPrice(){
      return $this->price;
    }
    public function getDescription(){
      return $this->description;
    }
  }



?>