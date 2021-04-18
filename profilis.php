<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:registration.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Profilis</title>
    
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
    
<div class="container">
<div class="profilis">
<h3> Sveiki <?php echo $_SESSION['username']; ?>!</h3>
<a href="index.php">Grįžti į pagrindinį puslapį</a>
    

    <h4>Pasikeisti slaptažodį</h4>
    <form action="profilis.php" method="post">
        <label for="senas_psw">Senas slaptažodis</label>
        <input type="password" class="form-control"name="senas_psw" required> 
        <label for="naujas_psw">Naujas slaptažodis</label>
        <input type="password" class="form-control" name="naujas_psw" required> 
        <label for="p_naujas_psw">Pakartokite naują slaptažodį</label>
        <input type="password" class="form-control" name="p_naujas_psw" required> 
        <input type="submit" class="form-control" value="Keisti slaptažodį">
    </form> <br>
    <?php
    changePsw();
    ?>

<h4>Mano užsakymai</h4>
<div class="uzsakymai">
<?php
    viewOrders();
    viewSavedOrders();
?>
</div>
</div>

</div>



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
</body>
</html>


<?php

function changePsw(){
        $con = new mysqli('localhost', 'root', '', 'foto-profas-db');
        $email = $_SESSION['username'];
    
        if(isset($_POST['senas_psw']) && isset($_POST['naujas_psw']) && isset($_POST['p_naujas_psw'])){
            $senas_psw = md5(filter_input(INPUT_POST, 'senas_psw', FILTER_SANITIZE_STRING));
            $naujas_psw = md5(filter_input(INPUT_POST, 'naujas_psw', FILTER_SANITIZE_STRING));
            $p_naujas_psw = md5(filter_input(INPUT_POST, 'p_naujas_psw', FILTER_SANITIZE_STRING));
            $psw = "SELECT Slaptazodis FROM vartotojas WHERE El_pastas = '$email' and Slaptazodis = '$senas_psw'";
            $old_psw = $con -> query($psw);
            $qp = "UPDATE vartotojas SET Slaptazodis = '$naujas_psw' WHERE El_pastas = '$email'";
            $kiek = $old_psw -> num_rows;
    
            if($kiek == 0){
                echo 'Bandykite dar kartą! Neteisingas senas slaptažodis.';
            } else if($naujas_psw != $p_naujas_psw){
                echo 'Bandykite dar kartą! Slaptažodžiai nesutampa.';
            } else{
                $new_psw = $con -> query($qp);
                echo "Slaptažodis sėkmingai pakeistas!";
            }
        } 
    }

function viewOrders(){
    $con = new mysqli('localhost','root','','foto-profas-db');

    $query_order = "SELECT * FROM uzsakymas NATURAL JOIN produktas NATURAL JOIN vartotojas ";
    $orders = $con -> query($query_order);
    $my_orders = $orders -> fetch_all(MYSQLI_ASSOC);
    // print_r($my_orders);
    echo '<table class="table-responsive">';
    echo '<tr>';
    echo'<th>Užsakymo ID</th><th>Vardas</th><th>Pavarde</th><th>Pirkimo data</th><th>Busena</th><th>Gamintojas</th><th>Pavadinimas</th><th>Kaina</th>';
    echo '</tr>';
    foreach($my_orders as $my_order){

        $uzs_id = $my_order['Uzsakymo_id'];
        $pirk_data = $my_order['Pirkimo_data'];
        $busena = $my_order['Busena'];
        $gamintojas = $my_order['Gamintojas'];
        $pavadinimas = $my_order['Pavadinimas'];
        $kaina = $my_order['Kaina'];
        $vardas = $my_order['Vardas'];
        $pavarde = $my_order['Pavarde'];
        echo '<tr>';
        echo '<td>';
        echo $uzs_id;
        echo '</td>';
        echo '<td>';
        echo $vardas;
        echo '</td>';
        echo '<td>';
        echo $pavarde;
        echo '</td>';
        echo '<td>';
        echo $pirk_data;
        echo '</td>';
        echo '<td>';
        echo $busena;
        echo '</td>';
        echo '<td>';
        echo $gamintojas;
        echo '</td>';
        echo '<td>';
        echo $pavadinimas;
        echo '</td>';
        echo '<td>';
        echo $kaina;
        echo '</td>';
        echo '</tr>';
    }
    echo'<table>';
}
function viewSavedOrders(){
    $con = new mysqli('localhost','root','','foto-profas-db');

    $query_saved_order = "SELECT * FROM issaugota_preke NATURAL JOIN produktas NATURAL JOIN vartotojas ";
    $saved_orders = $con -> query($query_saved_order);
    $my_saved_orders = $saved_orders -> fetch_all(MYSQLI_ASSOC);
    // print_r($my_orders);
    echo '<table class="table-responsive">';
    echo '<tr>';
    echo'<th>Išsaugotos prekės ID</th><th>Vardas</th><th>Pavardė</th><th>Gamintojas</th><th>Pavadinimas</th><th>Kaina</th>';
    echo '</tr>';
    foreach($my_saved_orders as $my_saved_order){

        $s_p_id = $my_saved_order['Issaugotos_p_id'];
        $gamintojas = $my_saved_order['Gamintojas'];
        $pavadinimas = $my_saved_order['Pavadinimas'];
        $kaina = $my_saved_order['Kaina'];
        $vardas = $my_saved_order['Vardas'];
        $pavarde = $my_saved_order['Pavarde'];
        echo '<tr>';
        echo '<td>';
        echo $s_p_id;
        echo '</td>';
        echo '<td>';
        echo $vardas;
        echo '</td>';
        echo '<td>';
        echo $pavarde;
        echo '</td>';
        echo '<td>';
        echo $gamintojas;
        echo '</td>';
        echo '<td>';
        echo $pavadinimas;
        echo '</td>';
        echo '<td>';
        echo $kaina;
        echo '</td>';
        echo '</tr>';
    }
    echo'<table>';
}

    ?>