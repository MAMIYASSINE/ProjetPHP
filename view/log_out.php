<?php
session_start();
$_SESSION['panier']=array();
$_SESSION['user']=null;
session_destroy();
header("Location:index.html");
exit();

?>
