<?php
$token = 'eyJhbGciOiJIUzI1NiJ9.eyJ0aWQiOjk5ODAxMzI1LCJ1aWQiOjIwMzA5NDE1LCJpYWQiOiIyMDIxLTAyLTE2VDEwOjUzOjU3LjAwMFoiLCJwZXIiOiJtZTp3cml0ZSIsImFjdGlkIjo4MjUzNjQ4LCJyZ24iOiJ1c2UxIn0.tKJfyTwJB7z2XCWpmgoqEyXJ6xVx-v5uzpGpB0wP90k';
$apiUrl = 'https://api.monday.com/v2';
$headers = ['Content-Type: application/json', 'Authorization: ' . $token];

$boards = '1065364511';

$query = '{boards(limit:1) { name id items { name column_values{id type text } } } }';
$data = @file_get_contents($apiUrl, false, stream_context_create([
  'http' => [
    'method' => 'POST',
    'header' => $headers,
    'content' => json_encode(['query' => $query]),
  ]
]));
$responseContent = json_decode($data, true);

echo json_encode($responseContent);
?>