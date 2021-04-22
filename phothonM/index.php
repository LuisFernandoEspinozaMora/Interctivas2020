<?php

    namespace Medoo;
    require "Medoo.php";

    session_start();
    if(isset($_SESSION["isLoggedIn"])){
        $database = new Medoo([
            "database_type" => "mysql",
            "database_name" => "phothon",
            "server" => "localhost",
            "username" => "root",
            "password" => "root"
        ]);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="./css/styleIndex.css">
    <title>Phothon</title>
</head>
<body>

    <header>
        <nav class="top-bar">
            <a href="./index.php">
                <img class="logo" src="./images/logo.png" alt="logo">
            </a>
            <span class="mob-menu fas fa-bars" onclick="openMobileMenu()"></span>
            <ul class="top-nav">
                <span class="mob-close far fa-times-circle" onclick="closeMobileMenu()"></span>

                <li class="top-nav-item"><a class="top-nav-link" href="./index.php">Home</a></li>
                <li class="top-nav-item"><a class="top-nav-link" href="./galery.php">Gallery</a></li>
                <li class="top-nav-item"><a class="top-nav-link" href="./profile.php"><?php if(isset($_SESSION["isLoggedIn"])){echo $_SESSION["usr"];}?></a></li>
                <li class="top-nav-item"><a class="top-nav-link" href="logout.php"><?php if(isset($_SESSION["isLoggedIn"])){echo "Logout";}?></a></li>

                <li class="top-nav-item">
                    <div class="search-item">
                        <input class="input-search" type="text" placeholder="Search">
                        <a class="icon-search" href="#"><i class="fas fa-search"></i></a>
                    </div>
                </li>

            </ul>
        </nav>
    </header>

    <section class="intro-section">
        <h1 class="intro-title">The most famous photography marathon in the world</h1>


        <?php 
            if(!isset($_SESSION["isLoggedIn"])){
                echo 
                "<div class='row'>
                    <li class='btn'><div class='login'><a class='btn-link' href='./login.php'>Login</a></div></li>
                    <li class='btn'><div class='register'><a class='btn-link' href='./add-user.php'>Register</a></div></li>
                </div>";
            }
        ?>
        
    </section>

    <footer>
        <a class="icon" href="#"><i class="fab fa-instagram"></i></a>
        <a class="icon" href="#"><i class="fab fa-facebook-f"></i></a>
        <a class="icon" href="#"><i class="fab fa-twitter"></i></a>
    </footer>

    <script src="./js/main.js"></script>
    
</body>
</html>