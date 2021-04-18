<?php
session_start();

if(isset($_POST['product_id'])){

    $success = 0;

    $product_ids = array();

        if(isset($_SESSION['shopping_cart'])){
            //keep track how many products are in shopping cart
            $count = count($_SESSION['shopping_cart']);
    
            //create sequential array for matching array keys to product ids
            $product_ids = array_column($_SESSION['shopping_cart'], 'Prekes_id');
    
            if(!in_array($_POST['product_id'], $product_ids)){
                $_SESSION['shopping_cart'][$count] = array
                (
                    'Prekes_id' => $_POST['product_id'],
                    'Gamintojas' => $_POST[ 'Gamintojas'],
                    'Pavadinimas' => $_POST[ 'Pavadinimas'],
                    'Kaina' => $_POST[ 'Kaina'],
                    'quantity' => $_POST[ 'quantity']
        
                );

                $success = 1;

            } 
            else{ // product already exists, increase quantity
                //match array key to id of the product being added to the cart
                for($i = 0; $i < count($product_ids); $i++){
                    if($product_ids[$i] == $_POST['product_id']){
                        //add item quanitty to the existing product in the array 
                        $_SESSION['shopping_cart'][$i]['quantity'] += $_POST[ 'quantity'];
                    }
                }
                $success = 1;
            }
        } 
        else{ //if shopping cart doesnt exist create first product with array 0
        //create array using submitted  form data starting form key 0 and fill it with values
            $_SESSION['shopping_cart'][0] = array
            (
                'Prekes_id' => $_POST['product_id'],
                'Gamintojas' => $_POST[ 'Gamintojas'],
                'Pavadinimas' => $_POST[ 'Pavadinimas'],
                'Kaina' => $_POST[ 'Kaina'],
                'quantity' => $_POST[ 'quantity'],
    
            ); 
            $success = 1;
        } 
        if(isset($_SESSION['cart-quantity'])){
        $_SESSION['cart-quantity'] = $_SESSION['cart-quantity'] + $_POST[ 'quantity'];
        } else{
            $_SESSION['cart-quantity'] = $_POST[ 'quantity'];
        }
        echo $success;
    }

    // print_r($_SESSION);