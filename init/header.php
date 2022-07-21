<?php
include_once('config.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Favicon_Image_Location   -->
    <link rel="shortcut icon" type="image/jpg" href="img/california.jpg"/>

    <title><?php if (isset($viewTitle)){echo $viewTitle;}?></title>
    <!--    Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body >
<nav class="navbar navbar-expand-xl bg-secondary navbar-dark mb-5 py-lg-3 ">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="./index" class="navbar-brand fs-3">Mohammad Ali</a>
        <div class="collapse navbar-collapse" id="navbarText">
            <div class="navbar-nav ms-auto">
                <a class="nav-item nav-link fs-5 "  href="login.php">Login</a>
                <a class="nav-item nav-link fs-5 " href="register.php">Register</a>
            </div>
        </div>
    </div>
</nav>

