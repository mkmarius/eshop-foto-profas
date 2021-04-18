<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Foto Profas</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/FP - icon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
    
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <!-- <div class="preloader">
        <div class="spin">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div> -->
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" style="width: 300px;" href="index.php">
                            <img src="assets/images/logo_1.png" alt="Logo">
                        </a> <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a data-scroll-nav="0" href="index.php">Pagrindinis</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="index.php#product">Naujos prekės</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="index.php#contact">Kontaktai</a>
                                </li>
                                <li class="nav-item">
                                    <a href="shop.php">Parduotuvė</a>
                                </li>
                                <?php if(isset($_SESSION['username'])){?>
                                <li class="nav-item">
                                    <a href="profilis.php">Profilis</a>
                                </li>
                                <?php } ?>
                                <?php if(!isset($_SESSION['username'])){?>
                                <li class="nav-item">
                                    <a href="registration.php">Prisijungti</a>
                                </li>
                                <?php } ?>
                                <?php if(isset($_SESSION['username'])){?>
                                <li class="nav-item">
                                    <a href="logout.php">Atsijungti</a>
                                </li>
                                <?php } ?>
                                <li class="cart-link">
                                <a href="cart.php">
                        <ion-icon name="basket"></ion-icon>Cart<span id="quantity-cart"><?php if(isset($_SESSION['cart-quantity'])){echo $_SESSION['cart-quantity'];} else {echo 0;} ?></span>
                    </a>
                </li>
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <section id="single-product">
    <div class="product-page">
    <?php
    displayProduct();
    ?>
    <hr>
    </div>



    <!--====== FOOTER PART START ======-->
    
        <div class="footer-product">
            <div class="footer-widget pt-75 pb-120">
                <div class="row footer-row">
                    <div class="col-lg-3 col-md-5 col-sm-7">
                        <div class="footer-logo mt-40">
                            <a href="#">
                                <img src="assets/images/logo_1-footer.png" alt="Logo">
                            </a>
                            <p class="mt-10">Gravida nibh vel velit auctor aliquetn quibibendum auci elit cons equat ipsutis sem nibh id elit.</p>
                            <ul class="footer-social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="footer-link mt-50">
                            <h5 class="f-title">Help</h5>
                            <ul>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-7">
                        <div class="footer-info mt-50">
                            <h5 class="f-title">Kontaktinė informacija</h5>
                            <ul>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Telefonas: </span>
                                        <div class="footer-info-content">
                                            <p> +370 6 123 4567 890</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>El. paštas:</span>
                                        <div class="footer-info-content">
                                            <p>admin@fotoprofas.lt</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Adresas:</span>
                                        <div class="footer-info-content">
                                            <p>Fotografijos g. 45, Vilnius</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright pt-15 pb-15">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p>Crafted by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!--  footer copyright -->
        </div> <!-- container -->
</section>
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->

<?php
function displayProduct(){

    $con = new mysqli('localhost', 'root', '', 'foto-profas-db');


    $sql = "SELECT * FROM `PRODUKTAS` WHERE Prekes_id = {$_GET['product_id']} LIMIT 1"; // LIMIT 0,1

      if ($result = $con -> query($sql)) {
          if($result -> num_rows){
        while ($row = $result -> fetch_assoc()) {
            $gamintojas = $row['Gamintojas'];
            $pavadinimas = $row['Pavadinimas'];
            $nuotrauka = $row['Nuotrauka'];
            $kaina = $row['Kaina'];
            $aprasymas = $row['Aprašymas'];
            $id = $row['Prekes_id'];
            echo '<div class="single-product">';
            echo "<a href='product.php'><img src='assets/images/product/$nuotrauka' style='height:300px'></a>";
            echo '<p>'.$gamintojas." ".$pavadinimas."<br></p>";
            echo '<p>'.$kaina."€</p><br>";
            // echo '<div class="cart">';
            // echo '<form class="cart-form" action="product.php" method="post">';
            // echo '<input type="number" class="form-control" name="kiekis" placeholder="Įveskite kiekį">';
            // echo '<input type="submit" class="form-control" name="add-to-cart" value="Pridėti į krepšelį">';
            // echo '</form>';
            // echo '</div>';
            echo '</div>';
            echo '<div class="aprasymas">';
            echo '<p>'.$aprasymas.'</p>';
            echo '</div>';
            
        }
        $result -> free_result();
      } else {
          echo 'Produktas nerastas';
      } 
    } 

       
    

    }


?>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>