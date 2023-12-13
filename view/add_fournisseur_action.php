<?php
require_once('../controller/FournisseurController.php');
require_once('../model/Fournisseur.php');
$nom=$_POST['nom'];
$pre=$_POST['pre'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$ida=$_POST['ida'];
$f=new Fournisseur($nom,$pre,$email,$tel,$ida);
$fController=new FournisseurController();
$fController->insert($f);
header('location:fournisseurs.php');

?>