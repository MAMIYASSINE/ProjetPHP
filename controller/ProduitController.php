<?php
include_once('../config/config.php');
include_once('../model/Produit.php');
class ProduitController extends Connexion{
    public function __construct() {
        parent::__construct();
    }
    public function liste(){
        $query="select libelle,prix,image,idProd,qtP from produit";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    public function recherche($libelle){
        $query= "select libelle,prix from produit where libelle=?";
        $res=$this->pdo->prepare($query);
        $res->execute(array($libelle));
        return $res;
    }
    public function insert(Produit $p){
    
        $query="insert into produit (libelle,prix,qtP,idA,image) values (?,?,?,?,?)";
        $res=$this->pdo->prepare($query);
        $array=array($p->getLibelle(),$p->getPrix(),$p->getQt(),$p->getIDA(),$p->getfilename());
        $res->execute($array);
        return $res;
    }
    public function update($idP,$productName,$price,$qtP){
        
        $query= "update produit set libelle=?,prix=?,qtP=? where idProd=?";
        $res=$this->pdo->prepare($query);
        $array=array($productName,$price,$qtP,$idP);
        $res->execute($array);
        return $res;
    }
    public function delete($idP){
    
        $query= "delete from produit where idProd=?";
        $res=$this->pdo->prepare($query);
        $res->execute(array($idP));
        return $res;
    }
    public function affiche_quantite($idP){
        $query= "select qtP from produit where idProd=?";
        $res=$this->pdo->prepare($query);
        $res->execute(array($idP));
        return $res;
    }
    public function getproduit($idP){
        $query= "select * from produit where idProd=?";
        $res=$this->pdo->prepare($query);
        $res->execute(array($idP));
        return $res;
    }
    /*public function commonder($idP,Produit $p,$qt){
        $query= "update produit set qtP=? where idProd=?";
        $res=$this->pdo->prepare($query);
        $nQT=$p->getQt()-$qt;
        $array=array($nQT,$idP);
        $res->execute($array);
        return $res;
    }*/
    public function listerlesproduitIDS($ids){
        $query= "select * from produit where idProd in(".implode(',',$ids).")";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;

    }

}