<?php 

require_once __DIR__."/Product.php";

  class Food extends Product{

    public $ingredients;
    public $origin;
    public $productor;

    public function __construct($_animal, $_price, $_description, $_ingredients, $_origin, $_productor){

      parent::__construct($_animal, $_price, $_description);
      
      $this-> ingredients = $_ingredients;
      $this-> origin = $_origin;
      $this-> productor = $_productor;

    }

    public function getIngredients(){
      return $this->ingredients;
    }
    public function getOrigin(){
      return $this->origin;
    }
    public function getProductor(){
      return $this->productor;
    }
    
  }

?>