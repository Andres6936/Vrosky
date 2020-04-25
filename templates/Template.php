<?php

include_once("Footer.php");

class Template
{
    public function showFooter()
    {
        $var = new Footer();
        print $var->getTemplate();
    }
}