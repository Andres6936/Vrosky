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
                <div class="card-body bg-primary">
                    <p class="card-text text-light font-weight-bold">' . $_text["GOOD"] . '</p>
                </div>
                <div class="card-body bg-danger">
                    <p class="card-text text-light font-weight-bold">' . $_text["BAD"] . '</p>
                </div>
            </div>';
    }
}