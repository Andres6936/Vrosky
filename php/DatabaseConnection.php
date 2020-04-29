<?php

// Database credentials.
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'localhost');
define('DB_NAME', 'Vrosky');

$mySQL = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($mySQL === false) {
    die('Error: Could not connect.');
}