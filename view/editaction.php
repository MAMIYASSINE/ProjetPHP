<?php
session_start();
require_once('../controller/ProduitController.php');
$productName=$_POST['product'];
$price=$_POST['price'];
$qtP=$_POST['qtp'];
$ProduitController=new ProduitController();
$ProduitController->update($_SESSION['idp'],$productName,$price,$qtP);
$_SESSION['idp']=null;
header('Location:products.php');

?>