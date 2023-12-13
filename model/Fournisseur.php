<?php
class Fournisseur{
    private $idF,$nomF,$prenomF,$emailF,$numtelF,$idA;
    public function __construct($nomF="", $prenomF= "", $emailF= "",$numtelF= "", $idA= ""){
        $this->nomF=$nomF;
        $this->prenomF=$prenomF;
        $this->emailF=$emailF;
        $this->numtelF=$numtelF;
        $this->idA=$idA;
    }
    public function getIdF(){
        return $this->idF;
    }
    public function getNomF(){
        return $this->nomF;
    }
    public function getPrenomF(){
        return $this->prenomF;
    }
    public function getEmailF(){
        return $this->emailF;
    }
    public function getNumtelF(){
            return $this->numtelF;
    }
    public function getIdA(){
        return $this->idA;
    }
    public function setNomF($nomF){
        $this->nomF=$nomF;
    }
    public function setPrenomF($prenomF){
        $this->prenomF=$prenomF;
    }
    public function setEmailF($emailF){
        $this->emailF=$emailF;
    }
    public function setNumtelF($numtelF){
        $this->numtelF=$numtelF;
    }  
    public function setidF($idF){
        $this->idF=$idF;
    }
    public function setIdA($idA){
        $this->idA=$idA;
    }   
}
?>