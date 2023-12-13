<?php
require_once('../controller/FournisseurController.php');
$fController=new FournisseurController();
$fController->delete($_GET['id']);
header('Location:fournisseurs.php');
?>