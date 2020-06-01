<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Questions</title>

    <link rel="stylesheet" href="../css/Trianglify.css">
    <script type='text/javascript' src='../js/knockout-3.5.1.js'></script>

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

    <div class="card-deck col-sm-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5>Size of the market (Number of potential consumers)</h5>
            </div>
            <div class="card-body">
                <p class="card-text font-weight-bold">The good or service has multiple uses The expected consumers are
                    many.</p>
                <a class="btn btn-primary text-light font-weight-bold">My Case</a>
            </div>
            <div class="card-body">
                <p class="card-text font-weight-bold">Consumers are restricted to a special class and are few in
                    number.</p>
                <a class="btn btn-danger text-light font-weight-bold">My Case</a>
            </div>
        </div>
    </div>

    <div class="card-deck">
        <!-- First Header -->
        <div class="col-12 mx-auto w-75 h-100 p-3">
            <h3 class="h3 text-center">Current Market</h3>
        </div>

        <?php
        $text = array(
            "TITTLE" => "Size of the market (Number of potential consumers)",
            "GOOD" => "The good or service has multiple uses The expected consumers are many.",
            "BAD" => "Consumers are restricted to a special class and are few in number.",
        );

        $var->showQuestion($text);

        $text = array(
            "TITTLE" => "Relationship of the good with the need.",
            "GOOD" => "It is always needed. It satisfies a basic need.",
            "BAD" => "Luxury product, not necessary.",
        );

        $var->showQuestion($text);

        $text = array(
            "TITTLE" => "Strength and influence of the competition",
            "GOOD" => "Relatively little competition. Unexplored field.",
            "BAD" => "Market dominated by much well-established competition.",
        );

        $var->showQuestion($text);

        $text = array(
            "TITTLE" => "Quality - price ratio compared to goods or services of the competition.",
            "GOOD" => "Goods or services with special characteristics. Much better than competing products.",
            "BAD" => "True imitation of existing products on the market.",
        );

        $var->showQuestion($text);
        ?>
    </div>

    <div class="card-deck pt-4">

        <?php
        $text = array(
            "TITTLE" => "Needs for after-sales services or care (e.g. maintenance).",
            "GOOD" => "easily served good or service. Service system available or easily contracted.",
            "BAD" => "Unknown service needs. No service facilities available.",
        );

        $var->showQuestion($text);

        $text = array(
            "TITTLE" => "Availability of sales - distribution systems",
            "GOOD" => "Easy to market with existing distributors.",
            "BAD" => "Requires special sales - distribution system.",
        );

        $var->showQuestion($text);

        $text = array(
            "TITTLE" => "Effort demanded by sales.",
            "GOOD" => "The good or service sells itself.",
            "BAD" => "Each sale demands great effort.",
        );

        $var->showQuestion($text);

        $text = array(
            "TITTLE" => "Possibilities of exploitation",
            "GOOD" => "Can be exported competitively. Large international market.",
            "BAD" => "Only national market.",
        );

        $var->showQuestion($text);
        ?>
    </div>

    <div class="card-deck">
        <!-- Second Header -->
        <div class="col-12 mx-auto w-75 h-100 p-3">
            <h3 class="h3 text-center">Potential market growth</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-tittle">Projected increase in the number of consumers</h5>
                <p class="card-text">Text Here</p>
            </div>
        </div>

        <div class="card ">
            <div class="card-body">
                <h5 class="card-tittle">Projected increase in needs.</h5>
                <p class="card-text">Text Here</p>
            </div>
        </div>

        <div class="card ">
            <div class="card-body">
                <h5 class="card-tittle">Increased consumer acceptance</h5>
                <p class="card-text">Text Here</p>
            </div>
        </div>

        <div class="card ">
            <div class="card-body">
                <h5 class="card-tittle">Product novelty and design protection</h5>
                <p class="card-text">Text Here</p>
            </div>
        </div>
    </div>

    <div class="card-deck pt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-tittle">Economic trends (favorable to increased consumption).</h5>
                <p class="card-text">Text Here</p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-tittle">Social and political trends (favourable to the increase of consumption).</h5>
                <p class="card-text">Text Here</p>
            </div>
        </div>

        <div class="card ">
            <div class="card-body">
                <h5 class="card-tittle">Competitive advantages.</h5>
                <p class="card-text">Text Here</p>
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


</body>
</html>
