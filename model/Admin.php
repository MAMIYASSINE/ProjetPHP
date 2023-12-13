<?php
class Admin{
    private $idA,$nomA,$prenomA,$eamilA,$mdpA;
    public function __construct($idA="",$nomA="",$prenomA="",$eamilA="",$mdpA="") {

        //$this->var = $var;
        $this->idA=$idA;
        $this->nomA=$nomA;
        $this->prenomA=$prenomA;
        $this->eamilA=$eamilA;
        $this->mdpA=$mdpA;
    }
    public function getIdA(){
        return $this->idA;
    }
    public function getNomA(){
        return $this->nomA; 
    }
    public function getPrenomA(){   
        return $this->prenomA;
    }
    public function getEamilA(){
        return $this->eamilA;
    }
    public function getMdpA($name){
        return $this->mdpA;
    }  
    public function setIdA($idA){
        $this->idA=$idA;
    }     
    public function setNomA($nomA){
        $this->nomA=$nomA;
    }
    public function setPrenomA($prenomA){
        $this->prenomA=$prenomA;
    }
    public function setEamilA($eamilA){
        $this->eamilA=$eamilA;
    }
    public function setMdpA($mdpA){
        $this->mdpA=$mdpA;
    }
}
?>