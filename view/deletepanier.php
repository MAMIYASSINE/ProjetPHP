<?php
session_start();
$_SESSION['panier']=array();
header('location:products.php');
?>