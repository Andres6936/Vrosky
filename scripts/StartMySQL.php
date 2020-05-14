<?php

$password = exec("Zenity --password");

print exec("echo " . $password . " | sudo -S service mysql start");