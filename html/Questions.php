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

    <div class="card-deck">
        <!-- First Header -->
        <div class="col-12 mx-auto w-75 h-100 p-3">
            <h3 class="h3 text-center">Current Market</h3>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-tittle">Size of the market (Number of potential consumers)</h5>
                <p class="card-text text-primary">The good or service has multiple uses The expected consumers are
                    many.</p>
                <p class="card-text text-danger">Consumers are restricted to a special class and are few in number.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-tittle">Relationship of the good with the need.</h5>
                <p class="card-text text-primary">It is always needed. It satisfies a basic need.</p>
                <p class="card-text text-danger">Luxury product, not necessary.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-tittle">Strength and influence of the competition</h5>
                <p class="card-text text-primary">Relatively little competition. Unexplored field.</p>
                <p class="card-text text-danger">Market dominated by much well-established competition.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-tittle">Quality - price ratio compared to goods or services of the competition.</h5>
                <p class="card-text text-primary">Goods or services with special characteristics. Much better than
                    competing
                    products.</p>
                <p class="card-text text-danger">True imitation of existing products on the market.</p>
            </div>
        </div>
    </div>

    <div class="card-deck pt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-tittle">Needs for after-sales services or care (e.g. maintenance).</h5>
                <p class="card-text text-primary">easily served good or service. Service system available or easily
                    contracted.</p>
                <p class="card-text text-danger">Unknown service needs. No service facilities available.</p>
            </div>
        </div>

        <div class="card ">
            <div class="card-body">
                <h5 class="card-tittle">Availability of sales - distribution systems</h5>
                <p class="card-text text-primary">Easy to market with existing distributors.</p>
                <p class="card-text text-danger">Requires special sales - distribution system.</p>
            </div>
        </div>

        <div class="card ">
            <div class="card-body">
                <h5 class="card-tittle">Effort demanded by sales.</h5>
                <p class="card-text text-primary">The good or service sells itself.</p>
                <p class="card-text text-danger">Each sale demands great effort.</p>
            </div>
        </div>

        <div class="card ">
            <div class="card-body">
                <h5 class="card-tittle">Possibilities of exploitation</h5>
                <p class="card-text text-primary">Can be exported competitively. Large international market.</p>
                <p class="card-text text-danger">Only national market.</p>
            </div>
        </div>
    </div>
</div>

<section class="row pt-sm-5">


    <!-- Second Header -->
    <div class="col-12 mx-auto w-75 h-100 p-3">
        <h3 class="h3 text-center">Potential market growth</h3>
    </div>

    <div class="card col-sm-2 offset-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Projected increase in the number of consumers</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Projected increase in needs.</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Increased consumer acceptance</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Product novelty and design protection</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2 offset-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Economic trends (favorable to increased consumption).</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-4">
        <div class="card-body">
            <h5 class="card-tittle">Social and political trends (favourable to the increase of consumption).</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

    <div class="card col-sm-2">
        <div class="card-body">
            <h5 class="card-tittle">Competitive advantages.</h5>
            <p class="card-text">Text Here</p>
        </div>
    </div>

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
