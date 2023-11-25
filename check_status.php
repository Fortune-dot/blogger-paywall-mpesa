<?php
// Database connection
$host = 'localhost';
$dbname = 'blogger-mpesa';
$username = 'root';
$password = '';
$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Get the external reference from the query parameters
$externalReference = $_GET['external_reference'];

// Query the database for the transaction status
$query = $db->prepare('SELECT status FROM transactions WHERE external_reference = :external_reference');
$query->execute(['external_reference' => $externalReference]);
$status = $query->fetchColumn();

// Return the status as a JSON response
header('Content-Type: application/json');
echo json_encode(['status' => $status]);