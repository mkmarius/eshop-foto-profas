<?php session_start();
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
    <style>
    *{
        font-family: sans-serif;
        text-align: center;
       
    }

    div{
        height: 90vh;
        margin-top: 0.5rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }
    form{
        
        display: flex;
        flex-direction: column;
        width: 30%;
        font-size: 14pt;
        box-shadow: 0px;
    }
    input{
        margin: 0.5rem;
        font-size: 14pt;
        padding: 10px;
    }

    h1{
        display: flex;
    }
    label{
        font-size: 16pt;
        font-weight: 600;
    }
    </style>
</head>
<body>
<div>



<h2>Prisijungti</h2>
    <form action="admin.php" method="post">
        <label for="user_login">Prisijungimo vardas</label>
        <input type="text" name="user_login" title="Įveskite prisijungimo vardą" required>
        <label for="psw">Slaptažodis</label>
        <input type="password" name="psw" title="Įveskite slaptažodį" required>
        <input type="submit" value="Prisijungti">
    </form>
    <?php
    loginAdmin();
    ?>
</div>

<?php


function loginAdmin(){
    if(isset($_POST['user_login']) && isset($_POST['psw'])){

        $con =  new mysqli('localhost','root','','foto-profas-db');
    
        $user_login = filter_input(INPUT_POST, 'user_login', FILTER_SANITIZE_STRING);
        $psw = md5(filter_input(INPUT_POST, 'psw', FILTER_SANITIZE_STRING));
    
        $query = "SELECT * FROM `admin` WHERE `Prisijungimo_vardas` = '$user_login'";

        $admin_login = $con -> query($query);
        $results = $admin_login -> fetch_assoc();
        // print_r($results);
        $kiek = $admin_login -> num_rows;

        if($kiek > 0){
            if($results['Slaptazodis'] ==  $psw){
            $_SESSION['user_admin'] =  $user_login;
            echo 'Prisijungta sėkmingai';
            header('location: product_table.php');
            } else{
                echo 'Neteisingas slaptažodis';
            }

        } else {
            echo 'Toks vartotojas neegzistuoja';
        }
    
}
}
?>