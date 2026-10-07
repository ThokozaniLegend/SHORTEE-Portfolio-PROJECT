<?php

/*
 * Auth: Thokozani J. Mahlangu
 * ALX STUDENT
 *
 */

header('Content-Type: application/json');

include 'db_connect.php';

// Only allow GET requests
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);

    echo json_encode([
        "error" => "Method not allowed. Use GET."
    ]);

    exit();
}

// Check that a short code was provided
if (!isset($_GET['short_code']) || empty(trim($_GET['short_code']))) {
    http_response_code(400);

    echo json_encode([
        "error" => "The short_code parameter is required."
    ]);

    exit();
}

$short_code = trim($_GET['short_code']);

// Find the original URL
$stmt = $conn->prepare(
    "SELECT long_url FROM URLs WHERE short_code = ?"
);

if (!$stmt) {
    http_response_code(500);

    echo json_encode([
        "error" => "Failed to prepare database query."
    ]);

    $conn->close();

    exit();
}

$stmt->bind_param("s", $short_code);
$stmt->execute();

$result = $stmt->get_result();

// Return the original URL if found
if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    http_response_code(200);

    echo json_encode([
        "success" => true,
        "long_url" => $row['long_url']
    ]);

} else {

    http_response_code(404);

    echo json_encode([
        "error" => "Short URL not found."
    ]);
}

$stmt->close();
$conn->close();
