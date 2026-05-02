<?php

$url = "http://127.0.0.1:5000/students";
$response = file_get_contents($url);

//Decodage du json en tableau php
$students = json_decode($response, true);

echo "<pre>";
print_r($students);
echo "<pre>";