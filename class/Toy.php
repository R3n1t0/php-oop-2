<?php 

require_once __DIR__."/Product.php";

  class Toy extends Product{

    public $materials;
    public $origin;
    public $productor;

    public function __construct($_animal, $_price, $_description, $_materials, $_origin, $_productor){

      parent::__construct($_animal, $_price, $_description);
      
      $this-> materials = $_materials;
      $this-> origin = $_origin;
      $this-> productor = $_productor;

    }

    public function getMaterials(){
      return $this->materials;
    }
    public function getOrigin(){
      return $this->origin;
    }
    public function getProductor(){
      return $this->productor;
    }

  }

?>