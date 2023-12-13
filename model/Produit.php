<?php
class Produit{
    private $idProd,$libelle,$prix,$qt,$idA,$filename;
    public function __construct($libelle="",$prix="", $qt="", $idA= "",$filename=""){
        $this->libelle=$libelle;
        $this->prix=$prix;
        $this->qt=$qt;
        $this->idA=$idA;
        $this->filename=$filename;
    }
    public function getIdProd(){
        return $this->idProd;
    }
    public function getLibelle(){
        return $this->libelle;
    }
    public function getPrix(){
            return $this->prix;
    }
    public function setIdProd($idProd){
        $this->idProd=$idProd;
    }
    public function setLibelle($libelle){
        $this->libelle=$libelle;
    }
    public function setPrix($prix){
        $this->prix=$prix;
    }
    public function getQt(){
        return $this->qt;
    }
    public function setqt($qt){
        $this->qt=$qt;
    }
    public function getIDA(){
        return $this->idA;
    }
    public function setIdA($idA){
        $this->idA=$idA;
    }
    public function getfilename(){
        return $this->filename;
    }


    
}
?>