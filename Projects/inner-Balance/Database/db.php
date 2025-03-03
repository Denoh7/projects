<?php

use Dotenv\Dotenv;
include '../vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

$db_server = "localhost";
$db_user = "root";
$db_pass = $_ENV['DATABASE_PASS'];
$db_name = $_ENV['DATABASE_NAME'];
$conn = null;

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    
    if (!$conn) {
        throw new Exception("Could not connect to the database");
    }
} catch (Exception $e) {
    error_log($e->getMessage());
    exit("Database connection error. Please try again later.");
}

?>
