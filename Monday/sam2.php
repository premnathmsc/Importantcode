<?php
$token = 'eyJhbGciOiJIUzI1NiJ9.eyJ0aWQiOjExNTMyNjY4MiwidWlkIjoyMjk1NDI0NiwiaWFkIjoiMjAyMS0wNi0yOVQwNTo0MzoyMS4wMDBaIiwicGVyIjoibWU6d3JpdGUiLCJhY3RpZCI6OTMzNzQ5MSwicmduIjoidXNlMSJ9.9kFmGNQtOcNNMGm8p7ArYO-Cj1QyQHBhh0rRshxL4a4';
$apiUrl = 'https://api.monday.com/v2';
$headers = ['Content-Type: application/json', 'Authorization: ' . $token];

$variable = 'Verify the pricing text is clickable';
$text = "TR0011 - Verify the pricing text is clickable";
$longtext = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";

//1476583457

//1476557828

$query = 'mutation ($myItemName: String!, $columnVals: JSON!) { create_item (board_id:1476557828, item_name:$myItemName, column_values:$columnVals) { id } }';
$vars = ['myItemName' => $variable, 
  'columnVals' => json_encode([
    'status' => ['label' => 'Working on it'], 
    'text' => $text, 
    'long_text_1' =>  ['text' => $longtext],
    'link' => ['url' => 'https://malar.qatouch.com/testrun/view/p/l3zJ/tid/0EJN/cid/pr9rm','text'=>'QA Touch - Test Run'], 
    'date4' => ['date' => '2021-07-29']
])];
$data = @file_get_contents($apiUrl, false, stream_context_create([
 'http' => [
 'method' => 'POST',
 'header' => $headers,
 'content' => json_encode(['query' => $query, 'variables' => $vars]),
 ]
]));
$responseContent = json_decode($data, true);

echo json_encode($responseContent);
?>
