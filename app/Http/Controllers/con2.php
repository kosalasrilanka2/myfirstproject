<?php
// greet.php
// A simple PHP script to greet a user by name

function greetUser($name) {
    $safeName = htmlspecialchars($name); // Prevent XSS
    echo "Hello, " . $safeName . "! Welcome to the Laravel project." . PHP_EOL;
}

// Check if a name is passed via query string or command line
if (php_sapi_name() == "cli") {
    // Command line mode
    $name = $argv[1] ?? 'Developer';
} else {
    // Web browser mode
    $name = $_GET['name'] ?? 'Guest';
}

greetUser($name);
