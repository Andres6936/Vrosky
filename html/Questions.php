<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Questions</title>

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
    "PRIVACY" => "Privacy.php",
    "CONTACT" => "Contact.php",
    "SIGNUP" => "../php/Register.php"
);

$var = new Template();
$var->showNavigation($links);
?>

<section class="row pt-sm-5" style="height: 620px">
    <div class="col-sm-6 mx-auto w-75 h-100 p-3" style="outline: 1px solid darkgrey">
        <h3 class="h3 text-center">Questions</h3>
    </div>
    <div>

    </div>
    <div>

    </div>
</section>

<?php
$var = new Template();
$var->showFooter();
$var->showBodyBootstrap();
?>


</body>
</html>
