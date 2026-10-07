<?php

/*
 * Auth: Thokozani J. Mahlangu
 * ALX STUDENT
 *
 */

session_start();

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

// Require an authenticated user
if (!isset($_SESSION['user_id'])) {
    http_response_code(401);

    echo json_encode([
        "error" => "Authentication required."
    ]);

    exit();
}

$user_id = (int) $_SESSION['user_id'];

// Retrieve URLs belonging only to the authenticated user
$stmt = $conn->prepare(
    "SELECT short_code, long_url
     FROM URLs
     WHERE user_id = ?"
);

if (!$stmt) {
    http_response_code(500);

    echo json_encode([
        "error" => "Failed to prepare database query."
    ]);

    $conn->close();

    exit();
}

$stmt->bind_param("i", $user_id);
$stmt->execute();

$result = $stmt->get_result();

$urls = [];

while ($row = $result->fetch_assoc()) {

    $urls[] = [
        "short_url" => $row['short_code'],
        "long_url" => $row['long_url']
    ];

}

http_response_code(200);

echo json_encode([
    "success" => true,
    "urls" => $urls
]);

$stmt->close();
$conn->close();
