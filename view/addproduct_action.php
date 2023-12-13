<?php
require_once('../model/Produit.php');
require_once('../controller/ProduitController.php');
$productName=$_POST['product'];
$price=$_POST['price'];
$qtP=$_POST['qtp'];
$idA=$_POST['ida'];
$filename=="";
if(isset($_FILES['image'])){

    $image=$_FILES['image']['name'];
    $filename=uniqid().$image;
    move_uploaded_file($_FILES['image']['tmp_name'],'../upload/produit/'.$filename);
}




$p=new Produit($productName,$price,$qtP,$idA,$filename);
$ProduitController=new ProduitController();
$ProduitController->insert($p);
header('location:products.php');

?>