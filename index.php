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

<?php
include_once("templates/Template.php");

$links = ["html/Team.php", "html/Privacy.php", "html/Contact.php"];

$var = new Template();
$var->showNavigation($links);
?>

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