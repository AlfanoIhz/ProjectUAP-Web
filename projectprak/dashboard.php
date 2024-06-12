<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Data Murid Bimbel</title>
    <script src="https://kit.fontawesome.com/97216fb713.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar {
        background-color: #74512D !important; /* Menambahkan !important untuk memastikan prioritas */
    }
        .navbar-nav {
            margin-left: auto;
        }
        /* .navbar-toggler {
            display: none; 
        } */
        .home_banner_area {
            background: #74512D;
            padding: 50px 0;
        }
        .banner_inner {
            background: #74512D;
            padding: 120px;
        }
        .banner_content {
            color: #F8F4E1;
        }
        .banner_content h2 {
            font-size: 50px;
        }
    </style>
</head>

<body>

    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #74512D;">
    <div class="container">
        <a class="navbar-brand" href="index.php" style="color: #F8F4E1;">SIDAMBI</a> <!-- Mengubah warna teks brand menjadi putih -->
        <!-- <span class="navbar-text" style="color: white;">Sistem Data Murid Bimbel</span>-->
        <div class="navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="color: #F8F4E1;">Home</a> <!-- Mengubah warna teks link menjadi putih -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php" style="color: #F8F4E1;">Login</a> <!-- Mengubah warna teks link menjadi putih -->
                </li>
            </ul>
        </div>
    </div>
</nav>


    </header>
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner_content">
                            <h2>Welcome to</h2>
                            <h2>SIDAMBI</h2>
                            <h2>Sistem Informasi Data Murid Bimbel</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="home-banner.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('includes/footer.php');?>

</body>
</html>
