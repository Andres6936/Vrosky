<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Vrosky</title>

    <link rel="stylesheet" href="css/Trianglify.css">

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
    "INDEX" => "#",
    "TEAM" => "html/Team.php",
    "LOGOUT" => "php/Logout.php",
    "SIGNUP" => "php/Register.php",
    "PRIVACY" => "html/Privacy.php",
    "CONTACT" => "html/Contact.php"
);

$var = new Template();
$var->showNavigation($links);
?>

<div id="main-content-index" class="position-relative overflow-hidden text-center bg-light p-3 p-md-5 m-md-3">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <!-- Actually, the element h1 is break for html and the class text-center,
            for avoid this style is necessary apply nowrap in css -->
        <h1 class="display-4 font-weight-normal" style="white-space: nowrap">Know your project</h1>
        <p class="lead font-weight-normal">The <em>project</em> cannot be conceived as a
            objective in itself. It is a <em>means</em> of achieving the objectives and
            goals that served as the basis for the formulation of the development
            plan and the sectoral programmes.</p>
        <a class="btn btn-outline-secondary" href="html/Questions.php">Check it out</a>
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

<?php
$var = new Template();

$var->showFooter();
$var->showBodyBootstrap();
?>


</body>
</html>