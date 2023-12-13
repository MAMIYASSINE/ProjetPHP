<?php
session_start();
require_once('../controller/CommandeController.php');
require_once('../model/Commande.php');
require_once('../controller/ClientController.php');
//echo $_SESSION['user']['email'];
    $nbp=$_POST['nbprod'];
    $tot=$_POST['tot'];
    $email=$_SESSION['email'];
    $clientcontroller=new ClientController();
    $res=$clientcontroller->getID($email);
    while($l=$res->fetch()){
        $idc=$l[0];
    }
    $c=new Commande($idc,$nbp,$tot);
    $commandecontroller=new CommandeController();
    $commandecontroller->insert($c);
    $_SESSION['panier']=array();
    header('location:products.php');

?>