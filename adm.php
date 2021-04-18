<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="assets/css/styles-admin.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">


</head>
<body>
    <div class="admin-page">
        <div class="products">
            <?php
            if(!isset($_GET['product_id'])){
            ?>
            <div class="add-new-product">
                <h1>Pridėti naują produktą</h1>
                
                <form action="adm.php" method="post" enctype="multipart/form-data">
                <label for="kategorija">Kategorija</label>
                <input type="text" class="form-control" name = "kategorija" >
                <label for="gamintojas">Gamintojas</label>
                <input type="text" class="form-control" name = "gamintojas"  >
                <label for="metai">Metai</label>
                <input type="number" class="form-control" name = "metai">
                <label for="pavadinimas">Pavadinimas</label>
                <input type="text" class="form-control" name = "pavadinimas" >
                <label for="nuotrauka">Nuotraukos įkėlimas</label>
                <input type="file" class="form-control" name = "nuotrauka" accept="image/png, image/jpeg, image/gif"> 
                <label for="aprasymas">Aprašymas</label>
                <input type="text" class="form-control" name = "aprasymas">
                <label for="kaina">Kaina</label>
                <input type="number" class="form-control" name = "kaina" >
                <input type="submit" class="form-control" value = "Patvirtinti">

                </form>
                </div>
                <?php
                addProduct();
            } else{
                $con = new mysqli('localhost','root','','foto-profas-db');
                $sql = "SELECT * FROM `produktas` WHERE `Prekes_id` = '{$_GET['product_id']}'";
                $results = $con -> query($sql);
                $products_data = $results -> fetch_all(MYSQLI_ASSOC);
                foreach($products_data as $product_data){
                    
                
                
                ?>
                
                <div class="edit-product">
                    <h1>Redaguoti produktus</h1>
                    <form action="adm.php?product_id=<?php echo $_GET['product_id']; ?>" method="post" enctype="multipart/form-data">
                    <label for="kategorija">Keisti kategoriją</label>
                    <input type="text" class="form-control" name = "nauja_kategorija" value = "<?php echo $product_data['Kategorija']; ?>">
                    <label for="gamintojas">Keisti gamintoją</label>
                    <input type="text" class="form-control" name = "naujas_gamintojas" value = "<?php echo $product_data['Gamintojas']; ?>">
                    <label for="metai">Keisti metus</label>
                    <input type="number" class="form-control" name = "nauji_metai"  value = "<?php echo $product_data['Metai']; ?>">
                    <label for="pavadinimas">Keisti pavadinimą</label>
                    <input type="text" class="form-control" name = "naujas_pavadinimas" value = "<?php echo $product_data['Pavadinimas']; ?>">
                    <label for="nuotrauka">Keisti nuotrauką</label>
                    <input type="file" class="form-control" name = "nauja_nuotrauka" accept="image/png, image/jpeg, image/gif" value = "<?php echo $product_data['Nuotrauka']; ?>"> 
                    <label for="aprasymas">Keisti aprašymą</label>
                    <textarea name="naujas_aprasymas"><?php echo $product_data['Aprašymas']; ?></textarea>
                    <!-- <input type="text" class="form-control" name = "naujas_aprasymas" value = ""> -->
                    <label for="kaina">Keisti kainą</label>
                    <input type="number" class="form-control" name = "nauja_kaina" value = "<?php echo $product_data['Kaina']; ?>">
                    <input type="submit" name="submit" class="form-control" value = "Patvirtinti">
                    </form>
                     <a href="product_table.php">Grįžti į produktų sąrašą</a>
                
                <?php
                }
                if(isset($_POST['submit'])){
                editProduct();
                }
            }
            
                ?>
                </div>
            </div>
        </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php

function addProduct(){
    $con = new mysqli('localhost','root','','foto-profas-db');
    if(!empty($_POST['kategorija']) && !empty($_POST['gamintojas']) && !empty($_POST['metai']) 
    && !empty($_POST['pavadinimas']) && !empty($_FILES['nuotrauka']) && !empty($_POST['aprasymas'])
    && !empty($_POST['kaina'])){

        $kategorija = $_POST['kategorija'];
        $gamintojas = $_POST['gamintojas'];
        $metai = $_POST['metai'];
        $pavadinimas = $_POST['pavadinimas'];
        $aprasymas = $_POST['aprasymas'];
        $kaina = $_POST['kaina'];

        $img_formats = array(
            'image/jpeg',
            'image/jpg',
            'image/png',
            'image/gif',
        );
        //$image_dir = 'C:\xampp\htdocs\EP-2LD-1UZD\images';
        
            if(!in_array($_FILES['nuotrauka']['type'], $img_formats) or $_FILES['nuotrauka']['error']!=0){
                echo '<p>Error 1: neužpildėte formos arba mėginate įkelti ne *.JPG, *.PNG, *.GIF failą,
                arba yra kt. failo įkėlimo problemų</p>';
            } else{
                move_uploaded_file($_FILES['nuotrauka']['tmp_name'],'assets/images/product/'.$_FILES['nuotrauka']['name']);
            }
        
        $image = $_FILES['nuotrauka']['name'];
        $query_add = "INSERT INTO `produktas`(`Kategorija`, `Gamintojas`, `Metai`, `Pavadinimas`, `Nuotrauka`, `Aprašymas`, `Kaina`)
        VALUES('$kategorija', '$gamintojas', '$metai', '$pavadinimas', '$image', '$aprasymas', '$kaina')";

        $con -> query($query_add);

    }
        //print_r($_FILES);
    }

function editProduct(){

    $con = new mysqli('localhost','root','','foto-profas-db');
    $product_id = $_GET['product_id'];
    $query = "SELECT * FROM `produktas`";


    if(!empty($_POST['nauja_kategorija']) && !empty($_POST['naujas_gamintojas']) && !empty($_POST['nauji_metai']) 
    && !empty($_POST['naujas_pavadinimas']) && !empty($_POST['naujas_aprasymas'])
    && !empty($_POST['nauja_kaina'])){
        
        $nauja_kategorija = $_POST['nauja_kategorija'];
        $naujas_gamintojas = $_POST['naujas_gamintojas'];
        $nauji_metai = $_POST['nauji_metai'];
        $naujas_pavadinimas = $_POST['naujas_pavadinimas'];
        $naujas_aprasymas= $_POST['naujas_aprasymas'];
        $nauja_kaina = $_POST['nauja_kaina'];

        $img_formats = array(
            'image/jpeg',
            'image/jpg',
            'image/png',
            'image/gif',
        );
        if(!empty($_FILES['nauja_nuotrauka']['name'])){
            print_r($_FILES);
            if(!in_array($_FILES['nauja_nuotrauka']['type'], $img_formats) or $_FILES['nauja_nuotrauka']['error']!=0){
                echo'<p>mėginate įkelti ne *.JPG, *.PNG, *.GIF failą,
                arba yra kt. failo įkėlimo problemų</p>';
            } else{
                move_uploaded_file($_FILES['nauja_nuotrauka']['tmp_name'],'assets/images/product/'.$_FILES['nauja_nuotrauka']['name']);
            }
        
        $new_image = $_FILES['nauja_nuotrauka']['name'];
       
      
        $query_update = "UPDATE `produktas` set `Kategorija` = '$nauja_kategorija', `Gamintojas` = '$naujas_gamintojas', `Metai` = '$nauji_metai', 
        `Pavadinimas` = '$naujas_pavadinimas', `Nuotrauka` = '$new_image', `Aprašymas` = '$naujas_aprasymas', `Kaina` = '$nauja_kaina' WHERE `Prekes_id` = '$product_id'";
        } else{
            $query_update = "UPDATE `produktas` set `Kategorija` = '$nauja_kategorija', `Gamintojas` = '$naujas_gamintojas', `Metai` = '$nauji_metai', 
        `Pavadinimas` = '$naujas_pavadinimas', `Aprašymas` = '$naujas_aprasymas', `Kaina` = '$nauja_kaina' WHERE `Prekes_id` = '$product_id'";
        }
        $con -> query($query_update);
        //echo $query_update;
        echo 'Sėkmingai atnaujinta!';
    } else {echo '<p>Error 1: neužpildėte formos</p>';}

        // $query_add = "INSERT INTO `produktas`(`Kategorija`, `Gamintojas`, `Metai`, `Pavadinimas`, `Nuotrauka`, `Aprašymas`, `Kaina`)
        // VALUES('$kategorija', '$gamintojas', '$metai', '$pavadinimas', '$image', '$aprasymas', '$kaina')";

        // $con -> query($query_add);

    }





?>