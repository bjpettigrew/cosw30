



<?php # Script 2.2 process_contact.php

$resident = $_POST['resident'];
$units = $_POST['units'];
$mandatory = $_POST['mandatory'];
$services = $_POST['services'];
$parking = $_POST['parking'];
$submit = $_POST[submit];

$tuition = $resident * $units;
$subtotal = $tuition + $mandatory + $services + $parking;
//calculate random scholarship?
//$scholarship = (rand (0, $total) . "<br>"');
$total = $subtotal - $scholarship;


echo "Cost of Tuition: " .  $units . "unit(s) x $" . $resident . "cost per unit = $" . $tuition;

echo "Mandatory Student Health Fee: $" . $mandatory;

echo "College Services Card: $" . $services;

echo "Parking Permit: $" . $parking;

echo "Total Registration Costs: $" . $subtotal;






?>