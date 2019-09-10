<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $interests = $_POST['interests'];
    $donation = $_POST['donation'];
    $list = $_POST['list'];
    $comments = $_POST['comments'];
    
    if(!empty($first_name) && !empty($last_name) && !empty($gender) && !empty($age) && !empty($list){
        echo '<h1>Haley Joel Osment you are fantastic!  Jennifer Love Hewitt you\'ve signed up!<br>Thank you for supporting Just Jack! For President!</h1>';
    }
   else {
        //Error - output an error message
        echo '<h1>There\'s no shame in getting it wrong.  There\'s only shame in getting ugly.  Please fill out the required fields and try again!</h1>';
        echo '<a href="register.php">Go back</a>'; 
    }
?>