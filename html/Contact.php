<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Title</title>

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

<div class="container">

    <section class="row">
        <form class="form-horizontal col-sm-6 offset-sm-3 py-5">
            <div class="form-group">
                <label class="control-label" for="contact-name">Name</label>
                <input class="form-control" type="text" id="contact-name" placeholder="Full name">
            </div>
            <div class="form-group">
                <label class="control-label" for="contact-email">Email</label>
                <input class="form-control" type="text" id="contact-email" placeholder="Contact email">
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="contact-message">Message</label>
                <textarea id="contact-message" class="form-control" rows="3"
                          placeholder="Type your message"></textarea>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <label class="checkbox">
                        <input type="checkbox" value="">
                        I want to subscribe to receive updates from the company.
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-lg" type="submit">Submit</button>
            </div>
        </form>
    </section>
</div>

<div class="container-fluid">

    <section id="newsletter" class="row bg-info">
        <h3 class="col-sm-12 py-5 text-center text-light font-weight-bold">
            Stay connected with us. Join the newsletter to receive fresh info.</h3>
        <form class="form-inline offset-sm-3 col-sm-6 pb-5" method="POST">
            <div class="form-group col-sm-4 col-xs-12">
                <label for="newsletter-name"></label>
                <input id="newsletter-name" class="form-control" placeholder="You name">
            </div>
            <div class="form-group col-sm-4 col-xs-12">
                <label for="newsletter-email"></label>
                <input id="newsletter-email" class="form-control" placeholder="Your email">
            </div>
            <div class="col-sm-4 col-xs-12">
                <button type="submit" class="btn btn-success btn-block">Join now!</button>
            </div>
        </form>
    </section>

</div>

<?php
$var = new Template();
$var->showFooter();
$var->showBodyBootstrap();
?>

</body>
</html>