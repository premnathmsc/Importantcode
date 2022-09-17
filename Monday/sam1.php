<?php
$token = 'eyJhbGciOiJIUzI1NiJ9.eyJ0aWQiOjExNTMyNjY4MiwidWlkIjoyMjk1NDI0NiwiaWFkIjoiMjAyMS0wNi0yOVQwNTo0MzoyMS4wMDBaIiwicGVyIjoibWU6d3JpdGUiLCJhY3RpZCI6OTMzNzQ5MSwicmduIjoidXNlMSJ9.9kFmGNQtOcNNMGm8p7ArYO-Cj1QyQHBhh0rRshxL4a4';
$apiUrl = 'https://api.monday.com/v2';
$headers = ['Content-Type: application/json', 'Authorization: ' . $token];

$board_id     = 1476557828;
$tastvariable = 'create issue testingdsdsdf';



		$query = 'mutation{ create_item (board_id:'.$board_id.', item_name:"'.$tastvariable.'") { id } }';
		$data = @file_get_contents($apiUrl, false, stream_context_create([
		'http' => [
		'method' => 'POST',
		'header' => $headers,
		'content' => json_encode(['query' => $query]),
		]
		]));
		$responseContent = json_decode($data, true);

		//$responsedata = json_encode($responseContent);

		print_r($responseContent);
		//echo $responseContent['data']['create_item']['id'];
		//echo $responseContent['account_id'];


?>