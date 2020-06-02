<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Questions</title>

    <link rel="stylesheet" href="../css/Trianglify.css">

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

<div class="container text-center">

    <!-- First Header -->
    <div class="col-12 mx-auto w-75 h-100 p-3">
        <h3 class="h3 text-center">Current Market</h3>
    </div>

    <div class="card-deck col-sm-6 mx-auto p-5">
        <div class="card">
            <div class="card-header">
                <h5 data-bind="text: questions.actQuestCurrMarket.title"></h5>
            </div>
            <div class="card-body">
                <p class="card-text font-weight-bold" data-bind="text: questions.actQuestCurrMarket.good"></p>
                <a class="btn btn-primary text-light font-weight-bold" onclick="nextQuestion()">My Case</a>
            </div>
            <div class="card-body">
                <p class="card-text font-weight-bold" data-bind="text: questions.actQuestCurrMarket.bad"></p>
                <a class="btn btn-danger text-light font-weight-bold" onclick="nextQuestion()">My Case</a>
            </div>
        </div>
    </div>

    <!-- Second Header -->
    <div class="col-12 mx-auto w-75 h-100 p-3">
        <h3 class="h3 text-center">Potential market growth</h3>
    </div>

    <div class="card-deck col-sm-6 mx-auto p-5">
        <div class="card">
            <div class="card-header">
                <h5 data-bind="text: questions.actQuestCosts.title"></h5>
            </div>
            <div class="card-body">
                <p class="card-text font-weight-bold" data-bind="text: questions.actQuestCosts.good"></p>
                <a class="btn btn-primary text-light font-weight-bold" onclick="nextQuestion()">My Case</a>
            </div>
            <div class="card-body">
                <p class="card-text font-weight-bold" data-bind="text: questions.actQuestCosts.bad"></p>
                <a class="btn btn-danger text-light font-weight-bold" onclick="nextQuestion()">My Case</a>
            </div>
        </div>
    </div>

</div>

<section class="row pt-sm-5">


    <!-- Third Header -->
    <div class="col-12 mx-auto w-75 h-100 p-3">
        <h3 class="h3 text-center">Costs</h3>
    </div>

    <div class="card col-sm-2 offset-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Raw material costs</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Cost of labor.</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Distribution costs (e.g. transport, handling, etc ...)</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Cost of sales.</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2 offset-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Efficiency of production processes.</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-4">
        <div class="card-body">
            <h5 class="card-tittle">Costs of after-sales services, guarantees and consumer complaints</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Patents and licenses.</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <!-- Fourth Header -->
    <div class="col-12 mx-auto w-75 h-100 p-3">
        <h3 class="h3 text-center">Risks</h3>
    </div>

    <div class="card col-sm-2 offset-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Market stability in economic cycles</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Technological risks.</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Import competition.</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Size and power of the competition</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2 offset-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Quality and reliability risks (untested design)</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Ease of demand forecasting</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Value of initial investments.</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Vulnerability of inputs (supply and price)</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2 offset-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Legislation and controls.</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Time required to make a profit.</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Inventory needs.</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Seasonal demand.</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2 offset-sm-5">
        <div class="card-body">
            <h5 class="card-tittle">Design exclusivity.</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

</section>

<?php
$var = new Template();
$var->showFooter();
$var->showBodyBootstrap();
?>

<script type='text/javascript' src='../js/knockout-3.5.1.js'></script>
<script type="text/javascript" src="../js/Costs.js"></script>
<script type="text/javascript" src="../js/CurrentMarket.js"></script>
<script type="text/javascript" src="../js/MarketGrowth.js"></script>
<script type="text/javascript" src="../js/Risks.js"></script>

<script>

    let questions = {
        actQuestCurrMarket: {
            title: ko.observable(currentMarket.questions[0].title),
            good: ko.observable(currentMarket.questions[0].good),
            bad: ko.observable(currentMarket.questions[0].bad),
        },
        actQuestCosts: {
            title: ko.observable(costs[0].title),
            good: ko.observable(costs[0].good),
            bad: ko.observable(costs[0].bad),
        }
    }

    let indexActQuestCurrMarket = 0;

    function nextQuestion() {
        indexActQuestCurrMarket += 1;

        questions.actQuestCurrMarket.title(currentMarket.questions[indexActQuestCurrMarket].title);
        questions.actQuestCurrMarket.good(currentMarket.questions[indexActQuestCurrMarket].good);
        questions.actQuestCurrMarket.bad(currentMarket.questions[indexActQuestCurrMarket].bad);
    }

    ko.applyBindings(questions);

</script>

</body>
</html>
