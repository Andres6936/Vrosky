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

    <style>

        /**
         * Extra utilities
         */
        .flex-equal > * {
            -ms-flex: 1;
            flex: 1;
        }

        @media (min-width: 768px) {
            .flex-md-equal > * {
                -ms-flex: 1;
                flex: 1;
            }
        }
    </style>

</head>
<body role="document">

<?php
$links = array(
    "TEAM" => "html/Team.php",
    "SIGNUP" => "php/Register.php",
    "PRIVACY" => "html/Privacy.php",
    "CONTACT" => "html/Contact.php"
);

$var = new Template();
$var->showNavigation($links);
?>

<div class="position-relative overflow-hidden text-center bg-light p-3 p-md-5 m-md-3">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Punny Headline</h1>
        <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your
            marketing efforts with this example based on Apple’s
            marketing pages.</p>
        <a class="btn btn-outline-secondary" href="html/Questions.php">Coming Soon</a>
    </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <!-- First Position -->
    <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px;
            border-radius: 21px 21px 0 0">
        </div>
    </div>

    <!-- Second Position -->
    <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-dark overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px;
            border-radius: 21px 21px 0 0">
        </div>
    </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <!-- First Position -->
    <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px;
            border-radius: 21px 21px 0 0">
        </div>
    </div>

    <!-- Second Position -->
    <div class="bg-secondary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-light overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">Another headline</h2>
            <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px;
            border-radius: 21px 21px 0 0">
        </div>
    </div>
</div>

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
$var = new Template();

$var->showFooter();
$var->showBodyBootstrap();
?>

<!-- Script for controller the visualization of slider -->
<script src="./js/Slider.js" type="text/javascript"></script>

</body>
</html>