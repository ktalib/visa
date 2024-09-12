<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

 

// Set the content type to JSON
header('Content-Type: application/json');
session_start();

// Check if admin is logged in, if not, redirect to login page
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: index.php');
    exit;
}

 

// Database connection
include 'db.php';

// Function to sanitize input
function sanitize($input) {
    return htmlspecialchars(strip_tags($input));
}

function output_json($data) {
    // Get the buffered content (any PHP errors or warnings)
    $errors = ob_get_clean();
    if ($errors) {
        $data['php_errors'] = $errors;
    }
    echo json_encode($data);
    exit;
}

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    output_json(['error' => 'Unauthorized access']);
}

if (!isset($_GET['id'])) {
    output_json(['error' => 'No user ID provided']);
}

$id = intval($_GET['id']);

try {
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    
    if ($user) {
        // Sanitize all user data
        foreach ($user as $key => $value) {
            $user[$key] = sanitize($value);
        }
        
        output_json($user);
    } else {
        output_json(['error' => 'User not found']);
    }
    
    $stmt->close();
} catch (Exception $e) {
    output_json(['error' => 'An error occurred while fetching user data', 'details' => $e->getMessage()]);
}

$conn->close();
?>