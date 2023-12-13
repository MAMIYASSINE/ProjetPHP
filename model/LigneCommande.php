<?php
class LigneCommande{
    private $qtDem,$numCommande,$idProd;
    public function __construct($qtDem,$numCommande,$idProd){
    
        $this->qtDem=$qtDem;
        $this->numCommande=$numCommande;
        $this->idProd=$idProd;
    }
    public function getQtCommande(){
        return $this->qtDem;
    }
    public function getNumCommande(){
        return $this->numCommande;
    }
    public function getIdProd(){
        return $this->idProd;
    }
    public function setIdProd($idProd){
        $this->idProd=$idProd;
    }
    public function setQtCommande($qtDem){
        $this->qtDem=$qtDem;
    }
    public function setNumCommande($numCommande){
        $this->numCommande=$numCommande;
    }
}
?>