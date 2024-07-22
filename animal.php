<?php

class Animal{

    protected $nom;
    protected $age;
    protected $espece;
    protected $poids;

    public function __construct($n,$a,$e,$p){

        $this -> nom = $n;
        $this -> age = $a;
        $this -> espece = $e;
        $this -> poids = $p;

    }

    public function getNom(){
        return $this->nom;
    }
    public function setNom($n){
        $this->nom = $n;
    }

    public function getAge(){
        return $this->age;
    }
    public function setAge($a){
        $this->age = $a;
    }

    public function getEspece(){
        return $this->espece;
    }
    public function setEspece($e){
        $this->espece = $e;
    }

    public function getPoids(){
        return $this->poids;
    }
    public function setPoids($p){
        $this->Poids = $p;
    }

   
    public function afficheDetails(){

        echo "Nom: ".$this ->nom.",Age: ".$this->age.",Espece: ".$this->espece.",Poids: ".$this->poids;
    }

}


?>