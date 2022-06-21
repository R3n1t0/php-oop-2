<?php

  class User{

    private $name;
    private $surname;
    private $adress;
    private $card_expiration;

    public function __construct($_name, $_surname, $_adress, $_card_expiration){

      $this->name = $_name;
      $this->surname = $_surname;
      $this->adress = $_adress;
      $this->card_expiration = $_card_expiration;
      
    }

    #Setter
    public function setName($_name){
      $this->name = $_name;
    }
    public function setSurname($_surname){
      $this->surname = $_surname;
    }
    public function setAdress($_adress){
      $this->adress = $_adress;
    }
    public function setCardExpiration($_card_expiration){
      $this->card_expiration = $_card_expiration;
    }
    #

    #Getter
    public function getName(){
      return $this->name;
    }
    public function getSurname(){
      return $this->surname;
    }
    public function getAdress(){
      return $this->adress;
    }
    public function getCardExpiration(){
      return $this->_card_expiration;
    }
    #

  }

?>