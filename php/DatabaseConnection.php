<?php

$pdo = new PDO('mysql:host=localhost;dbname=Elecciones;
             charset=utf8', 'root', 'localhost');

// This "silent failure" mode makes it more difficult for us to
// find out when something goes wrong and handle it gracefully.
// With this code void the "silent failure".
$pdo->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);