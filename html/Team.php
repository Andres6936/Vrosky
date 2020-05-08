<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Team</title>

    <?php
    require_once '../templates/Template.php';

    $var = new Template();
    $var->showHeadBootstrap();
    ?>

</head>
<body role="document">

<?php

$links = array(
    "TEAM" => "Team.php",
    "INDEX" => "../index.php",
    "LOGOUT" => "php/Logout.php",
    "SIGNUP" => "../php/Register.php",
    "PRIVACY" => "Privacy.php",
    "CONTACT" => "Contact.php"
);

$var = new Template();
$var->showNavigation($links);
?>

<!-- Principal Content -->
<section class="team-section text-center my-5 mx-auto" style="width: 80%">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold my-5">Our amazing team</h2>
    <!-- Section description -->
    <p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
        eum porro a pariatur veniam.</p>

    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
            <div class="avatar mx-auto">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg"
                     class="rounded-circle z-depth-1" alt="Sample avatar">
            </div>
            <h5 class="font-weight-bold mt-4 mb-3">Anna Williams</h5>
            <p class="text-uppercase blue-text"><strong>Graphic designer</strong></p>
            <p class="grey-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                adipisci sed quia non numquam modi tempora eius.</p>
        </div>

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
            <div class="avatar mx-auto">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle z-depth-1"
                     alt="Sample avatar">
            </div>
            <h5 class="font-weight-bold mt-4 mb-3">John Doe</h5>
            <p class="text-uppercase blue-text"><strong>Web developer</strong></p>
            <p class="grey-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ipsa accusantium
                doloremque rem laudantium totam aperiam.</p>
        </div>

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
            <div class="avatar mx-auto">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle z-depth-1"
                     alt="Sample avatar">
            </div>
            <h5 class="font-weight-bold mt-4 mb-3">Maria Smith</h5>
            <p class="text-uppercase blue-text"><strong>Photographer</strong></p>
            <p class="grey-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim est fugiat nulla id eu laborum.</p>
        </div>

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6">
            <div class="avatar mx-auto">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded-circle z-depth-1"
                     alt="Sample avatar">
            </div>
            <h5 class="font-weight-bold mt-4 mb-3">Tom Adams</h5>
            <p class="text-uppercase blue-text"><strong>Backend developer</strong></p>
            <p class="grey-text">Perspiciatis repellendus ad odit consequuntur, eveniet earum nisi qui consectetur
                totam officia voluptates perferendis voluptatibus aut.</p>
        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

</section>

<?php
$var = new Template();
$var->showFooter();
$var->showBodyBootstrap();
?>

</body>
</html>
