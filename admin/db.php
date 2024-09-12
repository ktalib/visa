<?php
$conn = new mysqli('localhost', 'root', '', 'visa');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}