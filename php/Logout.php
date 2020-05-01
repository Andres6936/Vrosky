<?php

/*
 * When the user clicks on the log out or sign out link, the script inside
 * this file destroys the session and redirect the user back to the login page.
 */

// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
header("location: Login.php");
exit;
