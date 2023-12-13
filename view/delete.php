<?php
require_once('../controller/ProduitController.php');
$ProduitController=new ProduitController();
$ProduitController->delete($_GET['id']);
header('Location:products.php');
?>