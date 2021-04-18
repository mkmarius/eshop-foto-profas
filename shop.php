<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parduotuvė</title>
<!--====== Required meta tags ======-->
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

<section id="shop">
<div class="product-listing">

          <ul class="category-nav ">
            <li class="active-cat cat">
              <a href="#" onclick="chooseCategory()" class="nav-cat" name="Veidrodiniai fotoaparatai">Veidrodiniai fotoaparatai</a>
            </li>
            <li class="cat">
              <a href="#" onclick="chooseCategory()" class="nav-cat" name="Sisteminiai fotoaparatai">Sisteminiai fotoaparatai</a>
            </li>
            <li class="cat">
              <a href="#" onclick="chooseCategory()" class="nav-cat" name="Objektyvai">Objektyvai</a>
            </li>
            <li class="cat">
              <a href="#" onclick="chooseCategory()" class="nav-cat" name="Filtrai">Filtrai</a>
            </li>
            <li class="cat">
              <a href="#" onclick="chooseCategory()" class="nav-cat" name="Nuotolinio valdymo pulteliai">Nuotolinio valdymo pulteliai</a>
            </li>
            <li class="cat">
              <a href="#" onclick="chooseCategory()" class="nav-cat" name="Apšvietimas">Apšvietimas</a>
            </li>
            <li class="cat">
              <a href="#" onclick="chooseCategory()" class="nav-cat" name="Krepšiai">Krepšiai</a>
            </li>
          </ul>
          <div class="search-box">
          <h5>Paieška</h5>
          <form action="shop.php" method="post">
          <input type="search" name="product-search" class="form-control" placeholder = "Ieškoti produktų">
          <label>Ieškoti pagal filtrus: </label>
          <input type="radio" name="filter" value="Kategorija"> Kategorija
          <input type="radio" name="filter" value="Gamintojas"> Gamintojas
          <input type="radio" name="filter" value="Metai"> Metai
          <input type="radio" name="filter" value="Pavadinimas"> Pavadinimas
          <input type="submit" class ="form-control" value="Ieškoti">
          </form>



            </div>
            <div class="clear">
<a href="shop.php">Išvalyti</a>
</div>



          <div id="result">
          <div class="search-result">

          <?php
            searchProduct();
            ?>

          </div>
    </div>


</div>
        

    </section>
</section>


<?php
function searchProduct(){

    if(isset($_POST['product-search']) and isset($_POST['filter'])){
        $con = new mysqli('localhost', 'root', '', 'foto-profas-db');
        $search_p = filter_input(INPUT_POST, 'product-search', FILTER_SANITIZE_STRING);
        $sp = "SELECT * FROM `PRODUKTAS` WHERE `{$_POST['filter']}` LIKE '%$search_p%'";
        $rez = $con -> query($sp);
        $count = $rez -> num_rows;
        $rows = $rez -> fetch_all(MYSQLI_ASSOC);
        if($count == 0){
            echo 'Pagal jūsų užklausą produktų nerasta.';
        }else{
            foreach($rows as $row){
                $gamintojas = $row['Gamintojas'];
                $pavadinimas = $row['Pavadinimas'];
                $nuotrauka = $row ['Nuotrauka'];
                $kaina = $row['Kaina'];
            
            echo '<div class="search-product">';
            echo "<a href='product.php'><img src='assets/images/product/$nuotrauka' style='width:200px'></a>";
            echo $gamintojas." ".$pavadinimas."<br>";
            echo $kaina."€<br>";
            // echo '<form method="post" action="cart.php?action=add&product_id='.$row['Prekes_id'].'">';
            echo '<form method="post">';
            echo '<input id="Prekes_id" type="hidden" name="product_id" value='.$row['Prekes_id'].'>';
            echo '<input type="text" name="quantity" class="form-control" value="1" placeholder="Kiekis">';
            echo '<input type="hidden" name="Gamintojas" value='.$row['Gamintojas'].'>';
            echo '<input type="hidden" name="Pavadinimas" value='.$row['Pavadinimas'].'>';
            echo '<input type="hidden" name="Kaina" value='.$row['Kaina'].'>';
            echo '<input type="submit" name="add_to_cart" class="form-control" value="Pridėti į krepšelį">';
            echo '</form>';
            echo '</div>';
            }
        }
    }
}
?>




<?php
// -------------CART------------------

//-------------------------------------

?>





 <!--====== jquery js ======-->
 <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    
    <!--====== nav js ======-->
    <script src="assets/js/jquery.nav.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="assets/js/jquery.nice-number.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <script src="/assets/js/cart.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script>

function chooseCategory() { 
    // $('ul.category-nav > li').click(function(e){
    $('a[name]').click(function(e){
var name =  $(this).attr('name');
console.log(name);
    $.post('getproducts.php', {postname:name},
        function(data){
            $('#result').html(data);

        });
    });
}

$(function(){

    // $('ul.category-nav > li').click(function(e){
    $('.search-product form').submit(function(e){
        e.preventDefault();
        let data = $(this).serializeArray();
        console.log(data);
        let add_quantity =  $(this).find('input[name="quantity"]').val();
    $.post('add-to-cart.php', data,
        function(result){
            if(result == 1){
                let cart_quantity = $('#quantity-cart').text();
                $('#quantity-cart').text(Number(cart_quantity)+Number(add_quantity));
                //alert('Produktas pridėtas!');
            }
         //$('#result').html(data);
         console.log(result);
       });
    });
});


// function search() { 
//     // $('ul.category-nav > li').click(function(e){
//     $('.searchbox form').submit(function(e){
//     var searchp =  $('.searchbox input[search]').val();
//     $.post('search.php', {postname:name},
//         function(data){
//             $('#result').html(data);

//         });
//     });
// }
    // $.ajax({
    //     type: 'POST',
    //         url: 'shop.php',
    //        data: 'value'+name,
    //         success: function(data){
    //             content.html(data);
    //         }
    //   });
    // $("a[name]").each(function(value){
    //     console.log(this.name);
    // });   
    // console.log($("a[name]").attr('name'));

 
 
    </script>


    

</body>
</html>