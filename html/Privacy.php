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
    "PRIVACY" => "Privacy.php",
    "CONTACT" => "Contact.php",
    "SIGNUP" => "../php/Register.php",
);

$var = new Template();
$var->showNavigation($links);
?>

<!-- Principal Content -->
<section class="container" id="posts" role="main">
    <header>
        <h4></h4>
    </header>
    <article class="posts">
        <aside>
        </aside>

    </article>
    <footer>

    </footer>
</section>

<?php
$var = new Template();
$var->showFooter();
$var->showBodyBootstrap();
?>

</body>
</html>
