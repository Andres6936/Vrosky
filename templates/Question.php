<?php


final class Question
{
    public function getTemplate(array $_text)
    {
        return '
            <div class="card">
                <div class="card-header">
                    <h5>' . $_text["TITTLE"] . '</h5>
                </div>
                <div class="card-body">
                    <p class="card-text font-weight-bold">' . $_text["GOOD"] . '</p>
                    <a class="btn btn-primary text-light font-weight-bold">My Case</a>
                </div>
                <div class="card-body">
                    <p class="card-text font-weight-bold">' . $_text["BAD"] . '</p>
                    <a class="btn btn-danger text-light font-weight-bold">My Case</a>
                </div>
            </div>';
    }
}