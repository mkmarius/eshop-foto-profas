<!DOCTYPE html>
<html lang="en">
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
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
    <title>Registracija</title>
</head>
<body>
<!-- 
<div class="preloader">
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
                                    <a href="index.php">Pagrindinis</a>
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

<section id="registration">
        <div class="register">
        <h2>Registruotis</h2>
        <form action="register.php"  class="form-group registration-form" method="post">
        <label for="el-pastas" class="col-form-label">El. pašto adresas</label>
        <input type="email" name="el-pastas" class ="form-control" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" title="Prašome įvesti validų el. pašto adresą" required>
        <label for="vardas">Vardas</label>
        <input type="text"  class ="form-control" title="Įveskite vardą teisingai!" name="vardas" required>
        <label for="pavarde">Pavardė</label>
        <input type="text" class ="form-control" title="Įveskite pavardę teisingai!" name="pavarde" required>
        <label for="telefono-nr" >Telefono numeris(+370):</label>
        <input type="text" pattern="[+](3706)[0-9]{7}" name="telefono-nr" class="form-control" title="Įveskite telefono numerį formatu: +3706xxxxxxx"required>
        <label for="adresas">Adresas</label>
        <input type="text" name="adresas" class="form-control" title="Įveskite adresą"required>
        <label for="slaptazodis">Slaptažodis</label>
        <input type="password" name="slaptazodis" class ="form-control" title="Įveskite slaptažodį"required>
        <label for="p-slaptazodis">Pakartokite slaptažodį</label>
        <input type="password" name="p-slaptazodis" class ="form-control" title="Pakartokite slpatažodį"required>
        <input id="register-btn" type="submit" class ="form-control" value="Registruotis"> 
    </form>
</div>

<div class="login">
    <h2>Prisijungti</h2>
    <form action="login.php" method="post">
        <label for="el-pastas">El. pašto adresas</label>
        <input type="email" class ="form-control" name="el-pastas" required>
        <label for="slaptazodis">Slaptažodis</label>
        <input type="password" class ="form-control" name="slaptazodis" required>
        <input id="login-btn" type="submit" class ="form-control" value="Prisijungti">
    </form>
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

    </section>
</body>
</html>