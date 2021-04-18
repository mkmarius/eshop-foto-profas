<?php
session_start();
?>er

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
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>

    <div class="cart-uzsakymas">
        <?php
        cart();
        ?>
    </div>
<body>
    
<?php
function cart(){

    
    //session_destroy();
    
    //check if Add To Cart buttton has been submitted

    
    // print_r($_SESSION);
    if(filter_input(INPUT_GET, 'action') =='delete'){
        //loop through all products in shoping cart unitl it matchews with id
        foreach($_SESSION['shopping_cart'] as $key => $product){
            if($product['Prekes_id'] == filter_input(INPUT_GET, 'product_id')){
                //remove product from the shopping cart when it matches with the GET id
                unset($_SESSION['shopping_cart'][$key]);
                $_SESSION['cart-quantity'] = $_SESSION['cart-quantity'] - $_GET['quantity'];
            }
        }
        //reset session array keys so they match with product ids numeric array
        $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
    }
    echo '<div class="uzsakymas">';
                        echo '<br>';
                        echo '<div class="table-order">';
                        echo '<table class="table-responsive">';
                        echo '<tr><th colspan="6"><h3>Užsakymo duomenys</h3></th></tr>';
                        echo '<tr>';
                        echo '<th>Gamintojas</th>';
                        echo '<th>Produkto pavadinimas</th=>';
                        echo '<th>Kiekis</thh=>';
                        echo '<th>Kaina</thdth=>';
                        echo '<th>Suma</th>';
                        echo '<th>Veiksmas</th>';
                        echo '</tr>';
                         
                        if(!empty($_SESSION['shopping_cart'])):
                            $total = 0;
                            foreach($_SESSION['shopping_cart'] as $key => $product){
                        
                        echo '<tr>';
                        echo '<td>'.$product['Gamintojas'].'</td>';
                        echo '<td>'.$product['Pavadinimas']; '</td>';
                        echo '<td>'.$product['quantity'].'</td>';
                        echo '<td>'.$product['Kaina'].'</td>';
                        echo '<td>';
                        echo intval($product['quantity']) * intval($product['Kaina']);
                        echo '</td>';
                        echo '<td>';
                        
                        //echo $product['Kaina'];
                       
                            echo '<a href="cart.php?action=delete&product_id='.$product['Prekes_id'].'&quantity='.$product['quantity'].'">';
                            echo '<div class="btn-danger">Remove</div>';
                            echo '</a>';
                            echo  '</td>';
                            echo '</tr>';
                        
                        
                              $total = intval($total) + (intval($product['quantity']) * intval($product['Kaina']));
                            
                            }
                        
                       echo '<tr>';
                       echo '<tr>';
                       echo '<td colspan="4" align="right">Total</td>';
                       echo  '<td align="right">';
                       echo number_format($total, 2);
                       echo '</td>';
                       echo  '<td></td>';
                       echo '</tr>';
                       echo  '<tr>';
                       echo  '<td colspan="6">';
                                
                                if(isset($_SESSION['shopping_cart'])):
                                    if(count($_SESSION['shopping_cart']) > 0):
                                      echo '<form action="cart.php" method="post">' ;
                                      echo  '<input type="submit" name="order"class="checkout-btn form-control" value="Vykdyti užsakymą"></input>';
                                      echo  '<input type="submit" name="save"class="checkout-btn form-control" value="Išsaugoti vėlesniam laikui"></input>';
                                      echo '</form>';
                                      sendOrder();
                                 endif; endif;
                                 echo  '</td>';
                                 echo '</tr>';
                        
                        endif;
                        
                        echo   '</table>';
                        echo '</div>';
    
    echo'</div>';


    
    
                    }

function sendOrder(){
    $con = new mysqli('localhost','root','','foto-profas-db');
    if(isset($_POST['order']) && isset($_SESSION['username'])){
        $query_user = "SELECT Vartotojo_id FROM VARTOTOJAS WHERE El_pastas = '{$_SESSION['username']}'";
        $pirkimo_data = date('Y-m-d');
        //echo $pirkimo_data;
        //echo $query_user;
       $user = $con -> query($query_user);
        $user_id = $user -> fetch_assoc();
        //echo $user_id['Vartotojo_id'];
        //foreach()
        for($i = 0; $i < count($_SESSION['shopping_cart']); $i++){
        $query_cart = "INSERT INTO uzsakymas (`Prekes_id`, `Kiekis`, `Vartotojo_id`, `Pirkimo_data`, `Busena`)
        VALUES('{$_SESSION['shopping_cart'][$i]['Prekes_id']}', '{$_SESSION['shopping_cart'][$i]['quantity']}', '{$user_id['Vartotojo_id']}', '$pirkimo_data', 'Neįvykdytas')";
        echo $query_cart;
        //print_r($_SESSION['shopping_cart'][$i]['Prekes_id']);
        $con -> query($query_cart);
        }
        echo 'Užsakymas sėkmingai išsiųstas!';
    } else if(!isset($_SESSION['username'])){
        echo 'Norėdami vykdyti užsakymą turite prisijungti';
    }


    if(isset($_POST['save']) && isset($_SESSION['username'])){
        $query_user = "SELECT Vartotojo_id FROM VARTOTOJAS WHERE El_pastas = '{$_SESSION['username']}'";
        $pirkimo_data = date('Y-m-d');
        //echo $pirkimo_data;
        //echo $query_user;
       $user = $con -> query($query_user);
        $user_id = $user -> fetch_assoc();
        for($i = 0; $i < count($_SESSION['shopping_cart']); $i++){
        $query_save = "INSERT INTO issaugota_preke (`Prekes_id`, `Vartotojo_id`, `Kiekis`)
        VALUES('{$_SESSION['shopping_cart'][$i]['Prekes_id']}', '{$user_id['Vartotojo_id']}', '{$_SESSION['shopping_cart'][$i]['quantity']}')";
        //echo $query_cart;
        //print_r($_SESSION['shopping_cart'][$i]['Prekes_id']);
        $con -> query($query_save);
        }
        echo 'Užsakymas sėkmingai išsiųstas!';
    } else if(!isset($_SESSION['username'])){
        echo 'Norėdami išsaugoti užsakymą turite prisijungti';
    }
    //print_r($_SESSION);
}



?>


</body>
</html>