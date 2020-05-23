<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Privacy</title>

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
    "LOGOUT" => "../php/Logout.php",
    "SIGNUP" => "../php/Register.php",
    "PRIVACY" => "Privacy.php",
    "CONTACT" => "Contact.php",
);

$var = new Template();
$var->showNavigation($links);
?>

<!-- Principal Content -->
<section class="container" id="posts" role="main">
    <div class="row py-5">
        <h1 class="col-sm-10 offset-sm-1 text-center">You’re in control</h1>
        <article class="col-sm-8 offset-sm-2 pt-5">
            <p class="text-center text-muted">
                We know that one size doesn’t fit all
                when it comes to privacy, so we build
                powerful, easy-to-use privacy tools
                into your Vrosky Account. They give
                you control over the privacy settings
                that are right for you, and what types
                of data we collect and use across our
                services.
            </p>
        </article>
        <h1 class="col-sm-12 py-5">Control how data is used across Vrosky</h1>
        <div class="col-sm-4">
            <h3>Take control of data saved in your Vrosky Account</h3>
            <p class="text-muted">You can find key info, privacy, and security
                settings all in your Vrosky Account. We have
                created easy-to-use tools like Dashboard and
                My Activity, which give you transparency over
                data collected from your activity across
                Vrosky services. There are also powerful
                privacy controls like Activity Controls
                Ad Settings, which allow you to switch the
                collection and use of data on or off to decide
                how all of Vrosky can work better for you.</p>
        </div>
        <div class="col-sm-8 pb-5">
            <img class="img-fluid" src="../img/PrivacyControl.png" alt="Control">
        </div>
        <div class="col-sm-4">
            <h3>Choose the privacy settings that are right for you
                with your Privacy Checkup</h3>
            <p class="text-muted">In just a few minutes, you can manage the types
                of data we collect, update what you share with
                friends or make public, and adjust the types
                of ads you would like us to show you. You can
                change these settings as often as you want and
                even choose to have regular reminders sent to
                help keep your current settings in mind.</p>
        </div>
        <div class="col-sm-8">
            <img class="img-fluid" src="../img/PrivacyCheck.png" alt="Control">
        </div>
    </div>

</section>

<?php
$var = new Template();
$var->showFooter();
$var->showBodyBootstrap();
?>

</body>
</html>
