<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $errors = [];

    // Validate username
    if (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
        $errors[] = "Username must be alphanumeric.";
    }

    // Validate password
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)) {
        $errors[] = "Password must be at least 8 characters long and contain one uppercase letter, one lowercase letter, one digit, and one special character.";
    }

    // If there are no errors, process login (this is where you'd add your login logic)
    if (empty($errors)) {
        // Your login logic here (e.g., check credentials in the database)
    } else {
        // Display errors on the login page (you may want to redirect back with errors)
        foreach ($errors as $error) {
            echo "<div class='error-message'>$error</div>";
        }
    }
}
?>
