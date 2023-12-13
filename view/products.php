<?php
session_start();
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
              <?php
              $num=0;
              if(!isset($_SESSION['panier'])){
                $num=0;
              }
              else{
                $num=array_sum($_SESSION['panier']);
              }
              ?>
              <a href="panier.php">
                <i class="fa fa-cart-plus" aria-hidden="true"><span><?=$num?></span></i>
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

  
  <div class="container-fluid">
  <div class="px-lg-5">
  <div>
    <?php 
    if($_SESSION['user'] === "admin"){
      echo "<a href='addproduct.php' class='btn btn-dark px-5 py-3 text-uppercase'>Add Product</a>
      <a href='fournisseurs.php' class='btn btn-dark px-5 py-3 text-uppercase'>Suppliers</a>";
      } 
    ?>
    </div>
    <br/>
    <br/>


    <!--<div class="row">-->
      <!-- Gallery item -->
      <!--<section class="featured spad">
        <div class="container">
          <div class="row featured__filter">-->
    <table class="table">
      <thead class="table-dark">
        <tr>
          <td></td>
          <td>Product Name</td>
          <td>Price</td>
          <?php 
          if($_SESSION["user"]=== "admin"){
            echo "<td>Quantite</td>";
          }
          ?>
          
          <td></td>
          <td></td>
          <?php 
          if($_SESSION["user"]=== "client"){
            echo "<td>Cart</td>";
            }
          
          ?>
        </tr>
      </thead>
      <?php
        require_once('../controller/ProduitController.php');
        $ProduitController=new ProduitController();
        $res=$ProduitController->liste();
        echo"<tbody>";
        while($l=$res->fetch()){
          echo "<tr>
          <td><img src='../upload/produit/$l[2]' width='100px' height='100px'></td>
          <td>$l[0]</td>
          <td>$l[1] DT</td>";
          
                  if($_SESSION['user']==="admin"){
                    echo "<td>$l[4]</td><td><a href='edit.php?id=$l[3]' type='submit' class='btn btn-dark px-5 py-3 text-uppercase'>Edit</a></td>
                    <td><a href='delete.php?id=$l[3]' class='btn btn-dark px-5 py-3 text-uppercase'>Delete</a></td>";
                  }
                  else{
                    echo "<td></td><td></td>";
                  }
                  if($_SESSION["user"]=== "client"){
          echo"<td>
          <!--<form method='post' action='ajouter_panier.php'>
          <input type='hidden' value='$l[3]' name='id'>
          <input type='submit' class='btn btn-success' value='Add to Cart' name='ajouter'>
          </form>-->
          <a href='ajouter_panier.php?id=$l[3]' class='btn btn-success'>Add to Cart</a>
          </td>
              </tr>";
          }
          
        }
        ?>
          <!--</div>
        </div>
      </section>-->
        </tbody>
    </table>
      <!-- End -->
    <!--</div>-->

    <div class="py-5 text-right"><!--<a href="#" class="btn btn-dark px-5 py-3 text-uppercase"></a>--></div>
   
  </div>
  

  <!-- end shop section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

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