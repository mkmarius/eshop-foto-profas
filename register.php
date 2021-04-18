<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        

<?php
session_start();

if(isset($_POST['el-pastas']) && isset($_POST['vardas']) && isset($_POST['pavarde']) && isset($_POST['telefono-nr']) && isset($_POST['adresas']) && 
isset($_POST['slaptazodis']) && isset($_POST['p-slaptazodis'])){

    newUser();

}

?>


<?php

function newUser(){

    $email = filter_input(INPUT_POST, 'el-pastas', FILTER_SANITIZE_EMAIL);
    $vardas = filter_input(INPUT_POST, 'vardas', FILTER_SANITIZE_STRING);
    $pavarde = filter_input(INPUT_POST, 'pavarde', FILTER_SANITIZE_STRING);
    $tel_nr = filter_input(INPUT_POST, 'telefono-nr', FILTER_SANITIZE_STRING);
    $adresas = filter_input(INPUT_POST, 'adresas', FILTER_SANITIZE_STRING);
    $slaptazodis = md5(filter_input(INPUT_POST, 'slaptazodis', FILTER_SANITIZE_STRING));
    $p_slaptazodis = md5(filter_input(INPUT_POST, 'p-slaptazodis', FILTER_SANITIZE_STRING));

    if(preg_match('~[0-9]~', $vardas) || preg_match('~[0-9]~', $pavarde)){
    echo 'Netinkamas vardas ir pavardė';
    }else{


$con = new mysqli('localhost', 'root', '', 'foto-profas-db');
$con -> set_charset("utf8");
    $check_email = $con -> query("SELECT * FROM  `VARTOTOJAS` WHERE `El_pastas` = '$email'");
        $email_res = $check_email -> num_rows;

        if($slaptazodis != $p_slaptazodis){
            echo 'Įvesti slaptažodžiai nesutampa';
        } else{
            if ($email_res > 0) {
                echo "Toks el. paštas jau registruotas!";
          }
          else
         {
         
             $ins = "INSERT INTO `VARTOTOJAS` (`El_pastas`, `Vardas`, `Pavarde`, `Telefono_nr`, `Adresas`, `Slaptazodis`) VALUES
             ('$email','$vardas','$pavarde','$tel_nr','$adresas','$slaptazodis')";
 
             if($con->query($ins)){
                 echo 'Registracija sėkminga!';
             }       
         }
        }
    }
}



?>
</body>
</html>