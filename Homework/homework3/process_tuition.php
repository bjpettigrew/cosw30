<!doctype html>
<html>
  <head>
    <title>Tuition Calculator</title>
    <meta charset="utf-8">
    <style>
      @import url('https://fonts.googleapis.com/css?family=Cinzel|Cormorant+Garamond&display=swap');
      body {
        background: black;
        padding: 5%;
      }
      #container1 {
        background: red;
        padding: 5%;
        border-style: ridge;
      }
      #form_box {
        background: white;
        padding: 10%;
        text-align: left;
        border-style: ridge;
        }
   
      h1 {
       font-family: 'Cinzel', serif; 
      }
      h2 {
        font-family: 'Cormorant Garamond', serif;
      }
      form {
        text-align:left;
        padding: 2% 20%;
      }
      p {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.25em;
        font-weight: bold;
      }
      
      
      
    </style>
  </head>
  
  <body>
    
    <img src="https://res.cloudinary.com/bayleigh/image/upload/v1568581000/php%20project%203/lbcc_logo_xtfdws.jpg" alt="Long Beach City College Logo" width="45%">
        
         <h1>Tuition & Fees Calculator</h1>

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
$scholarship = (rand(0, $tuition));
$total = $subtotal - $scholarship;


echo "<div id=\"container1\"><div id=\"form_box\"><p> Cost of Tuition: " .  $units . " unit(s) x $" . $resident . " per unit = $" . $tuition . "</p>";
echo "<br>";
echo "<p>Mandatory Student Health Fee: $" . $mandatory . "</p>";
echo "<br>";
echo "<p>College Services Card: $" . $services . "</p>";
echo "<br>";
echo "<p>Parking Permit: $" . $parking . "</p>";
echo "<br>";
echo "<h2>Total Registration Costs: $" . $subtotal . "</h2>";
echo "<br>";

echo "<p>Scholarship Awarded: $" . $scholarship . "</p>";
echo "<br>";

echo "<h2>Total Balance Due At Registration: $" . $total . "</h2>";


echo "<br></div><div>";

echo "</body>"



?>