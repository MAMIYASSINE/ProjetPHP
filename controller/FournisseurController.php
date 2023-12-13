<?php

include_once('../config/config.php');
include_once('../model/Fournisseur.php');
class FournisseurController extends Connexion {
    public function __construct() {
        parent::__construct();
    }
    public function insert( Fournisseur $f){
        $query="insert into fournisseur (nomF,prenomF,emailF,numTelF,idA) values (?,?,?,?,?)";
        $res=$this->pdo->prepare($query);
        $array=array($f->getNomF(),$f->getPrenomF(),$f->getEmailF(),$f->getNumtelF(),$f->getIdA());
        $res->execute($array);
        return  $res;
    }
    public function liste(){
        $query= "select * from fournisseur ";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    public function recherche($idF){
        $query= "select * from fournisseur where idF=?";
        $res=$this->pdo->prepare($query);
        $res->execute(array($idF));
        return $res;
    }
    public function update($idF,Fournisseur $f){
        $query= "update fournisseur set nomF=?,prenomF=?,emailF=?,numTelF=? where idF=? ";
        $res=$this->pdo->prepare($query);
        $array=array($f->getNomF(),$f->getPrenomF(),$f->getEmailF(),$f->getNumtelF(), $idF);
        return $res->execute($array);
    }
    public function delete($idF){
        $query= "delete from fournisseur where idF=?";
        $res=$this->pdo->prepare($query);
        $res->execute(array($idF));
        return $res;
    }
     

}
?>