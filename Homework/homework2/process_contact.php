<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Feedback</title>
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
    
    //$first_name = $_REQUEST['first_name'];
    //$last_name = $_REQUEST['last_name'];
    //$gender = $_REQUEST['gender'];
    //$age = $_REQUEST['age'];
    //$interests = $_REQUEST['interests'];
    //$donation = $_REQUEST['donation'];
    //$list = $_REQUEST['list'];
    //$comments = $_REQUEST['comments'];
    //$submit = $_REQUEST['submit'];
    
//if (!empty($_REQUEST['first_name'])) {
//        $first_name = $_REQUEST['first_name'];
//    } else {
//        $first_name = NULL;
//      echo '<p class="error">There\'s no shame in getting it wrong.  There\'s only shame in getting ugly. You forgot to enter your first name!</p>';
//    }
//if (!empty($_REQUEST['last_name'])) {
//        $last_name = $_REQUEST['last_name'];
//    } else {
//        $last_name = NULL;
//      echo '<p class="error">There\'s no shame in getting it wrong.  There\'s only shame in getting ugly. You forgot to enter your last name!</p>';
//    }
//if (!empty($_REQUEST['gender'])) {
//        $gender = $_REQUEST['gender'];
//    } else {
//        $gender = NULL;
//      echo '<p class="error">There\'s no shame in getting it wrong.  There\'s only shame in getting ugly. You forgot to enter your gender!</p>';
//    }    
//if (!empty($_REQUEST['age'])) {
//        $age = $_REQUEST['age'];
//    } else {
//        $age = NULL;
//    echo '<p class="error">There\'s no shame in getting it wrong.  There\'s only shame in getting ugly. You forgot to enter your age!</p>';
 //   }    

    
   if ( !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['gender']) && !empty($_POST['age']))
   {
        echo '<h1>Haley Joel Osment you are fantastic!  Jennifer Love Hewitt you\'ve signed up!  Thank you for supporting Just Jack! For President!</h1>';
    }
   else {
        //Error - output an error message
        echo '<h1>There\'s no shame in getting it wrong.  There\'s only shame in getting ugly.  Please fill out the required fields and try again!</h1>';
        echo '<a href="contact.html">Go back</a>'; 
    }
?>
</body>
/html>