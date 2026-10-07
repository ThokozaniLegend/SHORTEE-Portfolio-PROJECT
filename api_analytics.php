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

// Check that a short code was provided
if (!isset($_GET['short_code']) || empty(trim($_GET['short_code']))) {
    http_response_code(400);

    echo json_encode([
        "error" => "The short_code parameter is required."
    ]);

    exit();
}

$short_code = trim($_GET['short_code']);

// Retrieve analytics only for a URL belonging to the logged-in user
$stmt = $conn->prepare("
    SELECT COUNT(Analytics.url_id) AS click_count
    FROM Analytics
    INNER JOIN URLs
        ON URLs.url_id = Analytics.url_id
    WHERE URLs.short_code = ?
      AND URLs.user_id = ?
");

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

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    http_response_code(200);

    echo json_encode([
        "success" => true,
        "click_count" => (int) $row['click_count']
    ]);

} else {

    http_response_code(404);

    echo json_encode([
        "error" => "URL not found or you do not have permission to view its analytics."
    ]);
}

$stmt->close();
$conn->close();
