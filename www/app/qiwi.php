<?php
require 'vendor/autoload.php';
const SECRET_KEY = 'eyJ2ZXJzaW9uIjoiUDJQIiwiZGF0YSI6eyJwYXlpbl9tZXJjaGFudF9zaXRlX3VpZCI6Im04aTN6NC0wMCIsInVzZXJfaWQiOiI3OTk5NjkyMjcwOSIsInNlY3JldCI6IjhmN2RiZjcxZDY0NTUwMmZiOTE3ZjAzZGY4ODViMWJjZjdjMjJkZWFkOWM1Zjc0ZmQyNGUxZmY0YTFkY2E2NzEifX0=';

$billPayments = new Qiwi\Api\BillPayments(SECRET_KEY);

$billId = 'cc961e8d-d4d6-4f02-b737-2297e51fb48e' . mt_rand(0,999) . '-' . mt_rand(0,999);
$fields = [
  'amount' => $_POST['value'],
  'currency' => 'RUB',
  'expirationDateTime' => '2021-08-02T08:44:07+03:00',
];

/** @var \Qiwi\Api\BillPayments $billPayments */
$response = $billPayments->createBill($billId, $fields);
$location = $response['payUrl'];


header("Location: $location");

// print_r($response);

?>