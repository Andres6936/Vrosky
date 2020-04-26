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

<!-- Header and Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-ligth">
    <a class="navbar-brand" href="#">Vrosky</a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="Team.php">Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Privacy.php">Privacy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Contact.php">Contact</a>
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