<?php

$searchTerms = $_GET['artistName'];

require_once 'libraries/Services/Soundcloud.php';

// create a client object with your app credentials
$client = new Services_Soundcloud('c611fb7c941413f9737c562a27e307a7');

// find all sounds of buskers licensed under 'creative commons share alike'
$tracks = $client->get('tracks', array('q' => $searchTerms,  'limit' => 10));

echo $tracks;


?>