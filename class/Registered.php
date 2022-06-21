<?php

  require_once __DIR__."/User.php";

  class Registered extends User{

    public $discount = 20;

    public function __construct($_name, $_surname, $_adress, $_card_expiration, $_discount){
      
      parent::__construct($_name, $_surname, $_adress, $_card_expiration);

      $this->discount = $_discount;
    }

    public function getDiscount(){
      return $this->discount;
    }

  }

?>