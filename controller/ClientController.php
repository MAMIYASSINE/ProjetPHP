<?php

include_once('../config/config.php');
include_once('../model/Client.php');
class ClientController extends Connexion {
    public function __construct() {
        parent::__construct();
    }
    public function insert(Client $c){
        $query=" insert into client (nomC,prenomC,emailC,mdpC) values(?,?,?,?)";
        $res=$this->pdo->prepare($query);
        $array=array($c->getNomC(),$c->getPrenomC(),$c->getEmailC(),$c->getMdpC());
        $res->execute($array);
        return $res;
    }
    public function listeclient(){
        $query= "select* from client";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    public function indice($email2,$mdp2){
        $query="select * from client where emailC=? and mdpC=?";
        $res=$this->pdo->prepare($query);
        $array=array($email2,$mdp2);
        $res->execute($array);
        if($res->rowCount()> 0){
            return $res;
        }
        else{
            return "";
        }
    }
    public function getID($email){
        $query= "select idClient from client where emailC=?";
        $res=$this->pdo->prepare($query);
        //echo $email;
        $res->execute(array($email));
        return $res;
    }
    
}
?>