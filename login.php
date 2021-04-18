<?php

session_start();

loginUser();
?>

 



    <?php
    
    
    function loginUser(){
        $con = new mysqli('localhost', 'root', '', 'foto-profas-db');
        $con -> set_charset("utf8");
        
        if(isset($_POST['el-pastas']) && isset($_POST['slaptazodis'])){
                $email = filter_input(INPUT_POST, 'el-pastas', FILTER_SANITIZE_EMAIL);
                $slaptazodis = md5(filter_input(INPUT_POST, 'slaptazodis', FILTER_SANITIZE_STRING));
                $login = "SELECT * FROM  `VARTOTOJAS` WHERE `El_pastas` = '$email' and `Slaptazodis` = '$slaptazodis'";
                $check_login = $con -> query($login);
                print_r($check_login);
                $email_res = $check_login -> num_rows;
        
                if ($email_res > 0) {
                        $_SESSION['username'] = $email;
                        header('location:index.php');   
                 }else
                {
                        echo 'Toks el. paštas neegzistuoja arba neteisingas slaptažodis!'; 
                }
        }
}
    ?>