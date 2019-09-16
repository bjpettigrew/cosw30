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
        padding: 5%;
        text-align: center;
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
      #submit {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.25em;
        font-weight: bold;
        color: red;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        padding: 0 45%;
      }
      footer {
        color: white;
      }
      
    </style>
  </head>
  
  <body>
    <div id="container1">
       <div id="form_box">  



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


echo "<div><h2> Cost of Tuition: " .  $units . "unit(s) x $" . $resident . "per unit = $" . $tuition . "</h2>";
echo "<br>";
echo "Mandatory Student Health Fee: $" . $mandatory;
echo "<br>";
echo "College Services Card: $" . $services;
echo "<br>";
echo "Parking Permit: $" . $parking;
echo "<br>";
echo "Total Registration Costs: $" . $subtotal;
echo "<br></div><div>;




<body>



?>