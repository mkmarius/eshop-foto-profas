<?php
session_start();
        $con = new mysqli('localhost', 'root', '', 'foto-profas-db');
    if(isset($_POST['postname'])){
        
        $value = $_POST['postname'];
        $sc = "SELECT * FROM `PRODUKTAS` WHERE `Kategorija` = '$value'";// call removeday() here
        //echo $sc;
        $prekes = $con -> query($sc);
       $produktai = $prekes -> fetch_all(MYSQLI_ASSOC);
        foreach($produktai as $produktas){

            $gamintojas = $produktas['Gamintojas'];
            $pavadinimas = $produktas['Pavadinimas'];
            $nuotrauka = $produktas['Nuotrauka'];
            $kaina = $produktas['Kaina'];
            $id = $produktas['Prekes_id'];
            echo '<div class="shop-product">';
            echo "<a href='product.php?product_id=$id'><img src='assets/images/product/$nuotrauka' style='width:200px'></a>";
            echo $gamintojas." ".$pavadinimas."<br>";
            echo $kaina."€<br>";
            echo '<form method="post">';
            echo '<input id="Prekes_id" type="hidden" name="product_id" value="'.$produktas['Prekes_id'].'">';
            echo '<input type="text" name="quantity" class="form-control" value="1" placeholder="Kiekis">';
            echo '<input type="hidden" name="Gamintojas" value="'.$produktas['Gamintojas'].'">';
            echo '<input type="hidden" name="Pavadinimas" value="'.$produktas['Pavadinimas'].'">';
            echo '<input type="hidden" name="Kaina" value="'.$produktas['Kaina'].'">';
            echo '<input type="submit" name="add_to_cart" style="background-color: #840f0f"class="form-control text-light" value="Pridėti į krepšelį">';
            echo '</form>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
      }
    

      
    ?>
<script>
$(function(){

// $('ul.category-nav > li').click(function(e){
$('.shop-product form').submit(function(e){
    console.log('veikia');
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
$(function(){

// $('ul.category-nav > li').click(function(e){
$('.shop-product form').submit(function(e){
    console.log('veikia');
    e.preventDefault();
    let data = $(this).serializeArray();
    //console.log(data);
    let add_quantity =  $(this).find('input[name="quantity"]').val();
$.post('wishlist.php', data);
     //$('#result').html(data);
     //console.log(result);
   });
});
</script>