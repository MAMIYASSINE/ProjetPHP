<?php 
require_once ('../model/Client.php');
require_once ('../controller/ClientController.php');
$nom=$_POST['fm'];
$prenom=$_POST['lm'];
$email=$_POST['email'];
$pass=$_POST['mdp'];
$c=new Client($nom,$prenom,$email,$pass);
$ClientController=new ClientController();
$ClientController->insert($c); 
header('Location:sign_up.php');
?>