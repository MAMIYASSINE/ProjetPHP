<?php
class Client{
    private $idClient,$nomC,$prenomC,$emailC,$mdpC;

    public function __construct($nomC="",$prenomC="",$emailC="",$mdpC=""){
        //$this->idClient=$idClient;
        $this->nomC=$nomC;
        $this->prenomC=$prenomC;
        $this->emailC=$emailC;
        $this->mdpC=$mdpC;
    }
    public function getIdClient(){
        return $this->idClient;
    }
    public function setIdClient($idClient){
        $this->idClient=$idClient;
    }
    public function getNomC(){
        return $this->nomC;
    }
    public function setNomC($nomC){
        $this->nomC=$nomC;
    }
    public function getPrenomC(){
        return $this->prenomC;
    }
    public function setPrenomC($prenomC){
        $this->prenomC=$prenomC;
    }
    public function setEmailC($emailC){
        $this->emailC=$emailC;
    }
    public function getEmailC(){
        return $this->emailC;
    }
    public function setMdpC($mdpC){
        $this->mdpC=$mdpC;
    }
    public function getMdpC(){
        return $this->mdpC;
    }
    

}
?>