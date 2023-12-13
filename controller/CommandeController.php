<?php
include_once('../config/config.php');
include_once('../model/Commande.php');
class CommandeController extends Connexion{
    public function __construct(){
        parent::__construct();
    }
    public function insert(Commande $c){
        $query="insert into commande (idClient,tot,nbProd) values(?,?,?)";
        $res=$this->pdo->prepare($query);         
        $array=array($c->getIdClient(),$c->getTot(),$c->getnbProd());
        $res->execute($array);
        return $res;

    }


}
?>