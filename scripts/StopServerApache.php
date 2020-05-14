<?php

$password = exec("Zenity --password");

print exec("echo " . $password . " | sudo -S /usr/local/apache2/bin/apachectl stop");