<?php

class Oiseau extends Animal{

    protected $envergure;


    public function __construct($n,$a,$e,$p,$ev){

        parent::__construct($n,$a,$e,$p);
        $this ->envergure  = $ev;
    }
    
    public function getEnvergure(){
        return $this->envergure;
    }
    public function setEnvergure($ev){
        $this->envergure = $ev;
    }
    
    public function Afficher(){
        parent::AfficheDetails();
        echo"Envergure : ".$this->envergure;
    }
    
}





?>