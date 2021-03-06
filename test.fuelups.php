<?php

require 'bootstrap.php';

$client = getTestClient(FUELLY_TEST_MAIL, FUELLY_TEST_PASS, @$_GET['session']);

$client->ensureSession();
echo $client->auth->session . "\n\n\n";

echo "Vehicle:\n";
$vehicles = $client->vehicles;
$vehicle = $vehicles[ array_rand($vehicles) ];
print_r($vehicle);
echo "\n\n";

echo "All fuel-ups:\n";
$fuelups = $client->getAllFuelups($vehicle);
print_r($fuelups);
echo "\n\n";
