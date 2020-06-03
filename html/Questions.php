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

    <div class="row">

        <!-- First Header -->
        <div class="col-sm-7 p-3">
            <div class="row">
                <div class="col-sm-5">
                    <h1 class="text-left pt-5 pb-3 font-weight-bold">Current
                        <span class="text-danger font-weight-bold">Market</span></h1>
                    <p class="text-left text-muted pb-4">In particular,
                        those related to the six components of the market: product, demand,
                        supply, price, marketing or distribution channels and advertising or
                        publicity.</p>
                    <a class="btn btn-danger text-light font-weight-bold">Understand</a>
                </div>
                <div class="col-sm-5 pt-5 pl-5">
                    <img class="float-right" src="../img/ManBuss.png" alt="Man" height="350px"">
                </div>
            </div>
        </div>

        <div class="col-sm-5 p-5">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h5 data-bind="text: questions.actQuestCurrMarket.title"></h5>
                </div>
                <div class="card-body">
                    <p class="card-text font-weight-bold" data-bind="text: questions.actQuestCurrMarket.good"></p>
                    <a class="btn btn-primary text-light font-weight-bold" onclick="nextQuestCurrMarket()">My Case</a>
                </div>
                <div class="card-body">
                    <p class="card-text font-weight-bold" data-bind="text: questions.actQuestCurrMarket.bad"></p>
                    <a class="btn btn-danger text-light font-weight-bold" onclick="nextQuestCurrMarket()">My Case</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Third Header -->
    <div class="col-12 mx-auto w-75 h-100 p-3">
        <h3 class="h3 text-center">Costs</h3>
    </div>

    <div class="card-deck col-sm-6 mx-auto p-5">
        <div class="card">
            <div class="card-header">
                <h5 data-bind="text: questions.actQuestCosts.title"></h5>
            </div>
            <div class="card-body">
                <p class="card-text font-weight-bold" data-bind="text: questions.actQuestCosts.good"></p>
                <a class="btn btn-primary text-light font-weight-bold" onclick="nextQuestCosts()">My Case</a>
            </div>
            <div class="card-body">
                <p class="card-text font-weight-bold" data-bind="text: questions.actQuestCosts.bad"></p>
                <a class="btn btn-danger text-light font-weight-bold" onclick="nextQuestCosts()">My Case</a>
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
                <h5 data-bind="text: questions.actQuestMarketGrowth.title"></h5>
            </div>
            <div class="card-body">
                <p class="card-text font-weight-bold" data-bind="text: questions.actQuestMarketGrowth.good"></p>
                <a class="btn btn-primary text-light font-weight-bold" onclick="nextQuestMarketGrowth()">My Case</a>
            </div>
            <div class="card-body">
                <p class="card-text font-weight-bold" data-bind="text: questions.actQuestMarketGrowth.bad"></p>
                <a class="btn btn-danger text-light font-weight-bold" onclick="nextQuestMarketGrowth()">My Case</a>
            </div>
        </div>
    </div>

    <!-- Fourth Header -->
    <div class="col-12 mx-auto w-75 h-100 p-3">
        <h3 class="h3 text-center">Risks</h3>
    </div>

    <div class="card-deck col-sm-6 mx-auto p-5">
        <div class="card">
            <div class="card-header">
                <h5 data-bind="text: questions.actQuestRisks.title"></h5>
            </div>
            <div class="card-body">
                <p class="card-text font-weight-bold" data-bind="text: questions.actQuestRisks.good"></p>
                <a class="btn btn-primary text-light font-weight-bold" onclick="nextQuestRisks()">My Case</a>
            </div>
            <div class="card-body">
                <p class="card-text font-weight-bold" data-bind="text: questions.actQuestRisks.bad"></p>
                <a class="btn btn-danger text-light font-weight-bold" onclick="nextQuestRisks()">My Case</a>
            </div>
        </div>
    </div>

</div>

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
        },
        actQuestMarketGrowth: {
            title: ko.observable(marketGrowth[0].title),
            good: ko.observable(marketGrowth[0].good),
            bad: ko.observable(marketGrowth[0].bad),
        },
        actQuestRisks: {
            title: ko.observable(risks[0].title),
            good: ko.observable(risks[0].good),
            bad: ko.observable(risks[0].bad),
        }
    }

    let indexActQuestCurrMarket = 0;

    function nextQuestCurrMarket() {
        indexActQuestCurrMarket += 1;

        questions.actQuestCurrMarket.title(currentMarket.questions[indexActQuestCurrMarket].title);
        questions.actQuestCurrMarket.good(currentMarket.questions[indexActQuestCurrMarket].good);
        questions.actQuestCurrMarket.bad(currentMarket.questions[indexActQuestCurrMarket].bad);
    }

    let indexActQuestCosts = 0;

    function nextQuestCosts() {
        indexActQuestCosts += 1;

        questions.actQuestCosts.title(costs[indexActQuestCosts].title);
        questions.actQuestCosts.good(costs[indexActQuestCosts].good);
        questions.actQuestCosts.bad(costs[indexActQuestCosts].bad);
    }

    let indexActQuestMarketGrowth = 0;

    function nextQuestMarketGrowth() {
        indexActQuestMarketGrowth += 1;

        questions.actQuestMarketGrowth.title(marketGrowth[indexActQuestMarketGrowth].title);
        questions.actQuestMarketGrowth.good(marketGrowth[indexActQuestMarketGrowth].good);
        questions.actQuestMarketGrowth.bad(marketGrowth[indexActQuestMarketGrowth].bad);
    }

    let indexActQuestRisks = 0;

    function nextQuestRisks() {
        indexActQuestRisks += 1;

        questions.actQuestRisks.title(risks[indexActQuestRisks].title);
        questions.actQuestRisks.good(risks[indexActQuestRisks].good);
        questions.actQuestRisks.bad(risks[indexActQuestRisks].bad);
    }

    ko.applyBindings(questions);

</script>

</body>
</html>
