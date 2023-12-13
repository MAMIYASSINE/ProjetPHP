<?php
session_start();
require_once ('../controller/ClientController.php');
require_once ('../controller/AdminController.php');
if (isset($_POST['user'])) {
    $user=$_POST['user'];
    $pass=$_POST['mdp'];
    $email=$_POST['email'];
    if($user ==='client'){
        $ClientController=new ClientController();
        $res=$ClientController->indice($email,$pass);
        if($res === ""){
            //header("Location:sign_up.php");
            echo"<script> window.alert('undefined user');
            window.location.href='sign_up.php';</script>";
        }
        else{
            $_SESSION['email']=$email;
            $_SESSION['user']=$user;
            header("Location:products.php");
        }
    }
    else{
        $AdminController=new AdminController();
        $res=$AdminController->indice($email,$pass);
        if($res === ''){
            //header("Location:sign_up.php");
            echo"<script> window.alert('undefined user');
            window.location.href='sign_up.php';</script>";
        }
        else{
            $_SESSION['user']="admin";
            header("Location:products.php");
            

        }

    }

}


?>