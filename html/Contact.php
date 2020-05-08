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
    "PRIVACY" => "Privacy.php",
    "CONTACT" => "Contact.php",
    "SIGNUP" => "../php/Register.php",
);

$var = new Template();
$var->showNavigation($links);
?>

<div class="container">
    <section id="newsletter" class="text-center">
        <h4>Stay connected with us. Join the newsletter to receive fresh info.</h4>
        <form class="form-inline" method="POST">
            <div class="form-group">
                <label for="newsletter-name"></label>
                <div>
                    <input id="newsletter-name" class="form-control" placeholder="You name">
                </div>
            </div>
            <div class="form-group">
                <label for="newsletter-email"></label>
                <div>
                    <input id="newsletter-email" class="form-control" placeholder="Your email">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Join now!</button>
            </div>
        </form>
    </section>

    <div id="contact" class="row">
        <div class="col-sm-offset-2 col-sm-8">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="contact-name">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="contact-name" placeholder="Full name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="contact-email">Email</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="contact-email" placeholder="Contact email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="contact-message">Message</label>
                    <div class="col-sm-10">
                        <textarea id="contact-message" class="form-control" rows="3"
                                  placeholder="Type your message"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <label class="checkbox">
                            <input type="checkbox" value="">
                            I want to subscribe to receive updates from the company.
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button class="btn btn-success btn-lg" type="submit">Submit</button>
                    </div>
                </div>
            </form>
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