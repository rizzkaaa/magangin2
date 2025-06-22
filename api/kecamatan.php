<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $response = [
        "status" => "ok",
        "method" => "GET",
        "data" => $_GET // kiriman query string
    ];
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ambil JSON body jika dikirim sebagai JSON
    $json = file_get_contents('php://input');
    $body = json_decode($json, true);
    
    $response = [
        "status" => "ok",
        "method" => "POST",
        "data" => $body
    ];
} else {
    http_response_code(405);
    $response = [
        "status" => "error",
        "message" => "Method not allowed"
    ];
}

echo json_encode($response);
