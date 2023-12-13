
<?php
session_start();
if(isset($_GET['del'])){
  $id_del=$_GET['del'];
  unset( $_SESSION['panier'][$id_del]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>BricoTechStore</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="products.php">
            <span>
              BricoTechStore
            </span>
          </a>
         

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <!--<li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>-->
              <li class="nav-item">
                <a class="nav-link" href="products.php"> Products </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="log_out.php"> Log out </a>
              </li>
            </ul>
            <div class="user_option-box">
              <!--<a href="contact.html">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>-->
              <a href="panier.php">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
              </a>
              <!--<a href="">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>-->
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <table class="table">
      <thead class="table-dark">
        <tr>
          <td></td>
          <td>Product Name</td>
          <td>Price</td>
          <td>Quantity</td>
          <td>Total price</td>
          <td>Options</td>
        </tr>
      </thead>
      <tbody>
    <?php 
    require_once('../controller/ProduitController.php');
    $ProduitController=new ProduitController();
    $total=0;
    if(!isset($_SESSION['panier'])){
      echo'';
    }
    else{
    $ids=array_keys($_SESSION['panier']);
    if(empty($ids)){
      echo "your cart is empty";
    }
    else{
      $products=$ProduitController->listerlesproduitIDS($ids);
      foreach($products as $product){
        if($product['qtP']>$_SESSION['panier'][$product['idProd']]){
          $total=$total+$product['prix']*$_SESSION['panier'][$product['idProd']];
        echo "<tr>
        <td><img src='../upload/produit/".$product['image']."' width='100px' height='100px'></td>
        <td>".$product['libelle']."</td>
        <td>".$product['prix']."</td>
        <td>".$_SESSION['panier'][$product['idProd']]."</td>
        <td><a href='panier.php?del=".$product['idProd']."' class='btn btn-success'>Delete</a></td>

        </tr>";
        }
        else{ 
          echo"<script> window.alert('Request quantity exceeds stock quantity');
            window.location.href='products.php';</script>";
          unset($_SESSION['panier'][$product['idProd']]);
        }
        
      }

      echo"<tr>
      <td colspan='4'>Total :$total </td>
    </tr>";
    echo"<tr><td><form method='post' action='valider.php'>
    <input type='hidden' name='nbprod'  value='".array_sum($_SESSION['panier'])."'>
    <input type='hidden' name='tot' value='$total'>
  <div class='d-flex '>
    <button type='submit' class='btn btn-dark px-5 py-3 text-uppercase'>Buy</button>
  </div>
  </form></td>
  <td><a href='deletepanier.php' class='btn btn-dark px-5 py-3 text-uppercase'>Delete all</<a></td>
  </tr>";

    }
  }

    ?>
    
    </tbody>
</table>

<!--<a href="valider.php" class='btn btn-dark px-5 py-3 text-uppercase'>Buy</a>-->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>