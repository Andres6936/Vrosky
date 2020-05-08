<?php

// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["LOGGEDIN"]) && $_SESSION["LOGGEDIN"] === true) {
    header("location: index.php");
    exit;
}

// Include config file
require_once "DatabaseConnection.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM Vrosky.Users WHERE username = ?";

        if ($stmt = $mySQL->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Store result
                $stmt->store_result();

                // Check if username exists, if yes then verify password
                if ($stmt->num_rows == 1) {
                    // Bind result variables
                    $stmt->bind_result($id, $username, $hashed_password);
                    if ($stmt->fetch()) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["LOGGEDIN"] = true;
                            $_SESSION["ID"] = $id;
                            $_SESSION["USERNAME"] = $username;

                            // Redirect user to welcome page
                            header("location: ../index.php");
                        } else {
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $mySQL->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    <link rel="stylesheet" href="../css/floating-labels.css">

    <?php
    require_once '../templates/Template.php';

    $var = new Template();
    $var->showHeadBootstrap();
    ?>

</head>
<body role="document">

<?php
$links = ["Register.php", "../html/Team.php", "../html/Privacy.php", "../html/Contact.php"];

$var = new Template();
$var->showNavigation($links);
?>

<!-- If data comes from external sources like form filled in by anonymous users,
    there is a risk that it may contain malicious script indented to launch cross-site
    scripting (XSS) attacks. Therefore, you must escape this data using the PHP
    htmlspecialchars() function before displaying it in the browser, so that any HTML
    tag it contains becomes harmless.

    For example, after escaping special characters the string <script>alert("XSS")</script>
    becomes &lt;script&gt;alert("XSS")&lt;/script&gt; which is not executed by the browser.-->
<form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <!-- Header -->
    <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <p>Please fill in your credentials to login.</p>
    </div>

    <!-- Labels -->
    <div class="form-label-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
        <input id="inputUsername" type="text" name="username" class="form-control" placeholder="Username">
        <label for="inputUsername">Username</label>
        <span class="help-block"><?php echo $username_err; ?></span>
    </div>
    <div class="form-label-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
        <input id="inputPassword" type="password" name="password" class="form-control" placeholder="Password">
        <label for="inputPassword">Password</label>
        <span class="help-block"><?php echo $password_err; ?></span>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-lg btn-block btn-primary" value="Login">
    </div>
    <p class="mt-1 text-center">Don't have an account?<a class="ml-2" href="Register.php">Sign up now</a>.</p>
</form>


<?php
$var = new Template();
$var->showFooter();
$var->showBodyBootstrap();
?>

</body>
</html>