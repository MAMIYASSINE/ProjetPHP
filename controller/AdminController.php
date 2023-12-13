<?php
require_once('../config/config.php');
require_once('../model/Admin.php');
class AdminController extends Connexion{
    public function __construct(){
        parent::__construct();
    }
    public function indice($email1,$mdp1){
        $query=" select * from admin where emailA=? and mdpA=? ";
        $res=$this->pdo->prepare($query);
        $array=array($email1,$mdp1);
        $res->execute($array);
        if($res->rowCount()> 0){
            return $res;
        }
        else{
            return "";
        }
    }
    public function getID($email){
        $query= "select idA from admin where emailA=?";
        $res=$this->pdo->prepare($query);
        $res->execute(array($email));
        return $res;
    }
}
?>