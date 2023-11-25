<?php
try {
    // Database connection
    $host = 'localhost';
    $dbname = 'blogger-mpesa';
    $username = 'root';
    $password = '';
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Get the JSON payload from the request
    $data = json_decode(file_get_contents('php://input'), true);

    // Log the received data
    error_log(print_r($data, true));

    // Extract the transaction status from the payload
    $transactionStatus = $data['Body']['stkCallback']['ResultCode'] == 0 ? 'success' : 'failed';

    // Extract the external reference from the payload
    $externalReference = $data['Body']['stkCallback']['ExternalReference'];

    // Insert the transaction status into the database
    $query = $db->prepare('INSERT INTO transactions (status, external_reference) VALUES (:status, :external_reference)');
    $query->execute(['status' => $transactionStatus, 'external_reference' => $externalReference]);

    // Return a JSON response
    echo json_encode(['status' => 'success']);

} catch (Exception $e) {
    // Log any errors
    error_log($e->getMessage());

    // Return a JSON response
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}