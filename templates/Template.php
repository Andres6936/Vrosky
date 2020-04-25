<?php

include_once("Footer.php");
include_once("Bootstrap.php");

final class Template
{
    public function showFooter()
    {
        $var = new Footer();
        print $var->getTemplate();
    }

    public function showHeadBootstrap()
    {
        $var = new Bootstrap();
        print $var->getHeadBootstrap();
    }

    public function showBodyBootstrap()
    {
        $var = new Bootstrap();
        print $var->getBodyBootstrap();
    }
}