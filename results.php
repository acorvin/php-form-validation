<?php

// filtering is a PHP function that validates variables to ensure secure sources
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

// Validations
if (empty($username)) {
    $username_error = 'Please enter your username.';
} elseif (strlen($username) < 4) {
    $username_error = 'Username must be at least 4 characters.';
}

if (empty($email)) {
    $email_error = 'Please enter your email.';
}

if (empty($password)) {
    $password_error = 'Please enter your password.';
} elseif (strlen($password) < 6) {
    $password_error = 'Passwords must be at least 6 characters.';
}

// Route on Success
if (empty($username_error) && empty($email_error) && empty($password_error)) {
    include('success.php');
} else {
    include('index.php');
}
