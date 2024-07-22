<?php

class Mammifere extends Animal{

    protected $type_de_pelage;



    public function __construct($n,$a,$e,$p,$tp){

        parent::__construct($n,$a,$e,$p);
        $this ->type_de_pelage  = $tp;
    }
    
    public function getType_de_pelage(){
        return $this->type_de_pelage;
    }
    public function setType_de_pelage($tp){
        $this->type_de_pelage = $tp;
    }
    
    public function Afficher(){
        parent::AfficheDetails();
        echo"Type_de_pelage : ".$this->type_de_pelage;
    }
}






?>