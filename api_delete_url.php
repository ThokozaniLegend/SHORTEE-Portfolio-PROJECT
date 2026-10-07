<?php

/*
 * Auth: Thokozani J. Mahlangu
 * ALX STUDENT
 *
 */

session_start();

header('Content-Type: application/json');

include 'db_connect.php';

// Only allow DELETE requests
if ($_SERVER['REQUEST_METHOD'] !== 'DELETE') {
    http_response_code(405);

    echo json_encode([
        "error" => "Method not allowed. Use DELETE."
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

// Validate JSON
if (!is_array($data)) {
    http_response_code(400);

    echo json_encode([
        "error" => "Invalid JSON request."
    ]);

    exit();
}

// Check that short_code was provided
if (!isset($data['short_code']) || empty(trim($data['short_code']))) {
    http_response_code(400);

    echo json_encode([
        "error" => "The short_code field is required."
    ]);

    exit();
}

$short_code = trim($data['short_code']);

// Delete only a URL belonging to the authenticated user
$stmt = $conn->prepare(
    "DELETE FROM URLs WHERE short_code = ? AND user_id = ?"
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
    "si",
    $short_code,
    $user_id
);

// Execute deletion
if ($stmt->execute()) {

    if ($stmt->affected_rows > 0) {

        http_response_code(200);

        echo json_encode([
            "success" => true,
            "message" => "URL deleted successfully."
        ]);

    } else {

        http_response_code(404);

        echo json_encode([
            "error" => "URL not found or you do not have permission to delete it."
        ]);
    }

} else {

    http_response_code(500);

    echo json_encode([
        "error" => "Failed to delete URL."
    ]);
}

$stmt->close();
$conn->close();
