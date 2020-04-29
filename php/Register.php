<?php

/*
 * This script will also generate errors if a user tries to submit the form without entering
 *  any value, or if username entered by the user is already taken by another user.
 */

require_once 'DatabaseConnection.php';

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";


// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM Vrosky.Users WHERE username = ?";

        if ($stmt = $mySQL->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // store result
                $stmt->store_result();

                if ($stmt->num_rows == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO Vrosky.Users (username, password) VALUES (?, ?)";

        if ($stmt = $mySQL->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;

            // Used the PHP password_hash() function to create password hash from the
            // password string entered by the user. This function creates a password
            // hash using a strong one-way hashing algorithm. It also generates and
            // applies a random salt automatically when hashing the password; this
            // means that even if two users have the same passwords, their password
            // hashes will be different.

            // At the time of login we'll verify the given password with the password
            // hash stored in the database using the PHP password_verify() function.

            // Note: Password salting is a technique which is widely used to secure
            // passwords by randomizing password hashes, so that if two users have
            // the same password, they will not have the same password hashes.
            // This is done by appending or prepending a random string, called a salt,
            // to the password before hashing.
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to login page
                header("location: Login.php");
            } else {
                echo "Something went wrong. Please try again later.";
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

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sign Up</title>

    <link rel="stylesheet" href="../css/floating-labels.css">

    <?php
    require_once '../templates/Template.php';

    $var = new Template();
    $var->showHeadBootstrap();
    ?>

</head>
<body role="document">

<?php
$links = ["../html/Team.php", "../html/Privacy.php", "../html/Contact.php"];

$var = new Template();
$var->showNavigation($links);
?>

<form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <!-- Header -->
    <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
        <p>Please fill this form to create an account.</p>
    </div>

    <!-- Labels -->
    <div class="form-label-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
        <input id="inputUsername" name="username" type="text" class="form-control" placeholder="Username">
        <label for="inputUsername">Username</label>
        <span class="help-block"><?php echo $username_err; ?></span>
    </div>
    <div class="form-label-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
        <input id="inputPassword" name="password" type="password" class="form-control" placeholder="Password">
        <label for="inputPassword">Password</label>
        <span class="help-block"><?php echo $password_err; ?></span>
    </div>
    <div class="form-label-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
        <input id="inputConfirmPassword" name="confirm_password" type="password" class="form-control"
               placeholder="Confirm Password">
        <label for="inputConfirmPassword">Confirm Password</label>
        <span class="help-block"><?php echo $confirm_password_err; ?></span>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-lg btn-block btn-primary">Sign Up</button>
    </div>
    <div class="form-group">
        <button type="reset" class="btn btn-sm btn-block btn-default">Reset</button>
    </div>
    <p class="mt-1 text-center">Already have an account?<a class="ml-2" href="Login.php">Login here</a>.</p>
</form>

<?php
$var = new Template();
$var->showFooter();
$var->showBodyBootstrap();
?>

</body>
</html>


