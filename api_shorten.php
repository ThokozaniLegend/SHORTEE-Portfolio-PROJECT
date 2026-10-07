<?php

/*
 * Auth: Thokozani J. Mahlangu
 * ALX STUDENT
 *
 */

session_start();

header('Content-Type: application/json');

include 'db_connect.php';

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);

    echo json_encode([
        "error" => "Method not allowed. Use POST."
    ]);

    exit();
}

// Require an authenticated user
if (!isset($_SESSION['user_id'])) {
    http_response_code(401);

    echo json_encode([
        "error" => "Authentication required."
    ]);

    exit();
}

$user_id = (int) $_SESSION['user_id'];

// Read JSON request body
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Check that valid JSON was provided
if (!is_array($data)) {
    http_response_code(400);

    echo json_encode([
        "error" => "Invalid JSON request."
    ]);

    exit();
}

// Check that long_url was provided
if (!isset($data['long_url']) || empty(trim($data['long_url']))) {
    http_response_code(400);

    echo json_encode([
        "error" => "The long_url field is required."
    ]);

    exit();
}

$long_url = trim($data['long_url']);

// Validate URL
if (!filter_var($long_url, FILTER_VALIDATE_URL)) {
    http_response_code(400);

    echo json_encode([
        "error" => "Please provide a valid URL."
    ]);

    exit();
}

// Generate a short code
function generateShortCode($length = 6) {

    return substr(
        str_shuffle(
            "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
        ),
        0,
        $length
    );
}

$short_code = generateShortCode();

// Prepare database query
$stmt = $conn->prepare(
    "INSERT INTO URLs (user_id, long_url, short_code)
     VALUES (?, ?, ?)"
);

if (!$stmt) {
    http_response_code(500);

    echo json_encode([
        "error" => "Failed to prepare database query."
    ]);

    $conn->close();

    exit();
}

$stmt->bind_param(
    "iss",
    $user_id,
    $long_url,
    $short_code
);

// Execute query
if ($stmt->execute()) {

    http_response_code(201);

    echo json_encode([
        "success" => true,
        "short_url" => "http://yourdomain.com/" . $short_code,
        "short_code" => $short_code
    ]);

} else {

    http_response_code(500);

    echo json_encode([
        "error" => "Failed to create shortened URL."
    ]);
}

$stmt->close();
$conn->close();
