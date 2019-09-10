<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Feedback</title>
    <style>
        body {
          background-image: linear-gradient(to right, red, orange, yellow,green, blue, indigo, violet);
          color: black;
          -webkit-text-fill-color: white;
          -webkit-text-stroke-width: 1.5px;
          -webkit-text-stroke-color: black;
          font-size: 1.3em;
          font-weight: bold;
          text-align: center;
          padding: 10%;
          }
        
        
    </style>
</head>
<body>

<?php # Script 2.2 process_contact.php

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $interests = $_POST['interests'];
    $donation = $_POST['donation'];
    $list = $_POST['list'];
    $comments = $_POST['comments'];
    $submit = $_POST['submit'];
    
   if ( !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['gender']) && !empty($_POST['age']))
   {
        echo '<h1>Haley Joel Osment you are fantastic!  Jennifer Love Hewitt you\'ve signed up! <br> Thank you for supporting Just Jack! For President!</h1>';
    }
   else {
        //Error - output an error message
        echo '<h1>There\'s no shame in getting it wrong.  There\'s only shame in getting ugly.  Please fill out the required fields and try again!</h1>';
        echo '<a href="contact.html">Go back</a>'; 
    }
?>
</body>
</html>