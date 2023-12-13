<?php
session_start();
require_once('../controller/FournisseurController.php');
require_once('../model/Fournisseur.php');
$nom=$_POST['nom'];
$pre=$_POST['pre'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$fController=new FournisseurController();
$f=new Fournisseur($nom,$pre,$email,$tel,1);
$fController->update($_SESSION['idf'],$f);
$_SESSION['idf']=null;
header('Location:fournisseurs.php');

?>