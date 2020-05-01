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
$links = ["../php/Register.php", "Team.php", "Privacy.php", "Contact.php"];

$var = new Template();
$var->showNavigation($links);
?>


<?php
$var = new Template();
$var->showFooter();
$var->showBodyBootstrap();
?>


</body>
</html>
