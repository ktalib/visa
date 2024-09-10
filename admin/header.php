<?php
session_start();

// Check if admin is logged in, if not, redirect to login page
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'visa');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input
function sanitize($input) {
    return htmlspecialchars(strip_tags($input));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <div class="navbar-nav">
                <a class="nav-link" href="users.php">Users</a>
                <a class="nav-link" href="documents.php">Documents</a>
                <a class="nav-link" href="progress.php">Progress</a>
                <a class="nav-link" href="?logout">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">