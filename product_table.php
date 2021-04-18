<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktai</title>
    <link rel="stylesheet" href="assets/css/styles-admin.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
        <div class="product-list">
        <a href="adm.php"><ion-icon name="add-outline">Pridėti naują produktą</ion-icon> Pridėti naują produktą</a>
        <a href="admin.php">Atsijungti</a>
    <?php
        productList();
    ?>
        </div>

        <script src="assets/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>

<?php
function productList(){
$con = new mysqli('localhost','root','','foto-profas-db');

$product_query = "SELECT * FROM `produktas`";
$products = $con -> query($product_query);

$rows = $products -> fetch_all(MYSQLI_ASSOC);

echo '<table>';
echo '<tr>';
echo '<th>Prekes_id</th><th>Kategorija</th><th>Gamintojas</th><th>Pavadinimas</th><th>Veiksmas</th>';
echo '</tr>';
foreach($rows as $row){

    $prekes_id = $row['Prekes_id'];
    $kategorija = $row['Kategorija'];
    $gamintojas = $row['Gamintojas'];
    $pavadinimas = $row['Pavadinimas'];

    echo '<tr>';
    echo '<td>';
    echo $prekes_id ;
    echo '</td>';
    echo '<td>';
    echo $kategorija;
    echo '</td>';
    echo '<td>';
    echo $gamintojas;
    echo '</td>';
    echo '<td>';
    echo $pavadinimas;
    echo '</td>';
    echo '<td>';
    echo '<a href="adm.php?product_id='.$prekes_id.'"><ion-icon name="pencil-outline">Redaguoti</ion-icon><a>';

    echo '</td>';
    
    echo '</tr>';
    //cart.php?action=delete&product_id='.$product['Prekes_id']

}
echo '</table>';
}
?>
