<?php
session_start();
require_once('../controller/ProduitController.php');
$ProduitController=new ProduitController();
    if(!isset($_SESSION['panier'])){
        $_SESSION['panier'] = array();
    }
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $produit=$ProduitController->getproduit($id);
        if(empty($produit->fetch())){
            die('Ce produit n existe pas') ;
    }
    if(isset($_SESSION['panier'][$id])){
        $_SESSION['panier'][$id]++;
    
    }
    else{
        $_SESSION['panier'][$id]=1; 
        
    }
}
    header('Location:products.php');
?>