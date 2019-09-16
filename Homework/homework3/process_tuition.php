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
        padding: 2% 25%;
        text-align: left;
        border-style: ridge;
        }
   
      h1 {
       font-family: 'Cinzel', serif;
       text-align: center; 
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
      .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 50%;
      }
      
      
    </style>
  </head>
  
  <body>
    <div id="container1">
        <div id="form_box">
        <img src="https://res.cloudinary.com/bayleigh/image/upload/v1568581000/php%20project%203/lbcc_logo_xtfdws.jpg" alt="Long Beach City College Logo" width="45%" class ="center">
        
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


//echo "<div id=\"container1\"><div id=\"form_box\"><img src="https://res.cloudinary.com/bayleigh/image/upload/v1568581000/php%20project%203/lbcc_logo_xtfdws.jpg" alt="Long Beach City College Logo" width="45%">";
        

echo "<p> Cost of Tuition: " .  $units . " unit(s) x $" . $resident . " per unit = $" . $tuition . "</p>";

echo "<p>Mandatory Student Health Fee: $" . $mandatory . "</p>";

echo "<p>College Services Card: $" . $services . "</p>";

echo "<p>Parking Permit: $" . $parking . "</p>";

echo "<h2>Total Registration Costs: $" . $subtotal . "</h2>";

echo "<p>Scholarship Awarded: $" . $scholarship . "</p>";
echo "<br>";

echo "<h1>Total Balance Due At Registration: $" . $total . "</h1>";


echo "<br></div><div>";

echo "</body>"



?>