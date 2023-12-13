<?php
class Commande{
    private $numCommande,$idClient,$nbProd,$tot;
    public function __construct($idClient="",$nbProd="",$tot=""){
        $this->idClient=$idClient;
        $this->nbProd=$nbProd;
        $this->tot=$tot;
    }
    public function getIdClient(){
        return $this->idClient;
    }
    public function getTot(){
        return $this->tot;
    }
    public function setIdClient($idClient){
        $this->idClient=$idClient;
    }
    public function setTot($tot){
        $this->tot=$tot;
    }
    public function getNumCommande()
    {
        return $this->numCommande;
    }
    public function setNumCommande($numCommande){
        $this->numCommande=$numCommande;
    }
    public function getnbProd(){
        return $this->nbProd;
    }
    public function setNbProd($nbProd){
        $this->nbProd=$nbProd;
    }
}
?>