<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Vrosky</title>

    <?php
    include_once("templates/Template.php");

    $var = new Template();
    $var->showHeadBootstrap();
    ?>

</head>
<body role="document">

<!-- Header and Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-ligth">
    <a class="navbar-brand" href="#">Vrosky</a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="html/Team.html">Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="html/Privacy.html">Privacy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="html/Contact.html">Contact</a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<!-- Principal Content -->
<section class="container" id="posts" role="main">

    <div id="carouselIndex" class="carousel slide" data-ride="carousel">

        <!-- Button Prev -->
        <a class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carouselIndex" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndex" data-slide-to="1"></li>
            <li data-target="#carouselIndex" data-slide-to="2"></li>
        </ol>

        <!-- Content -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/DoingWrestling.jpg" alt="First Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/MasonryWorker.jpg" alt="First Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/StandingLectern.jpg" alt="First Slide">
            </div>
        </div>

        <!-- Button Next -->
        <a class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>

</section>

<?php
include_once("templates/Template.php");

$var = new Template();
$var->showFooter();
$var->showBodyBootstrap();
?>

<!-- Script for controller the visualization of slider -->
<script src="./js/Slider.js" type="text/javascript"></script>

</body>
</html>