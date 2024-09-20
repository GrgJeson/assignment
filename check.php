<?php
// check.php

// Function to check the credentials
function checkCredentials($username, $password) {
    // Define correct credentials (you can replace these with database checks in the future)
    $correctUsername = 'admin';
    $correctPassword = '12345';

    // Check if the provided credentials match the correct ones
    if ($username === $correctUsername && $password === $correctPassword) {
        return true;
    } else {
        return false;
    }
}

// Get the submitted data
$username = $_POST['username'];
$password = $_POST['password'];

// Validate credentials and redirect accordingly
if (checkCredentials($username, $password)) {
    header("Location: success.php");
} else {
    header("Location: error.php");
}
exit();
?>
