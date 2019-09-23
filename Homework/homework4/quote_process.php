<!doctype=html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Sorting Arrays</title>
      <style>
          li {
              list-style: none;
          }
          body {
              background-color: #D3F0D2;
              padding: 3% 10%;
          }
          
          
          
      </style>
    </head>
    <body>


<?php
    
   
    $quote = $_POST['quote'];
    $extra = $_POST['extra'];
    
    
    echo "<p><strong>Original Quote:</strong></p>";
        
    echo "<p>\"$quote\"</p>"; 
    
    $quoteExplode = explode(' ', $quote);
    $extraExplode = explode(' ', $extra);
    
    echo "<p><strong>Word Count:</strong></p>";
   
    
    echo count($quoteExplode);
    
    
    echo "<p><strong>Quoted Words In Alphabetical Order:</strong></p>";
    
    natcasesort($quoteExplode);
        
       foreach ($quoteExplode as $val) {
         echo "<li>$val\n</li>";
      }
    
    echo "<p><strong>Quoted Words In Reverse-Alphabetical Order:</strong></p>";
    
    rsort($quoteExplode);
        
       foreach ($quoteExplode as $val) {
         echo "<li>$val\n</li>";
      }
    
    echo "<p><strong>With Additional Words:</strong></p>";
    
    $quoteExplode = array_merge($quoteExplode, $extraExplode);
    
    
    
    foreach ($quoteExplode as $value){
        echo "<li>$value\n</li>";
    }
    
    
    echo "<p><strong>New Word Count:</strong></p>";
    echo count($quoteExplode);
    
    echo "<p><strong>Subtract First Three Words Of Array:</strong></p>";
    
    array_splice($quoteExplode, 0, 3);
    
    foreach ($quoteExplode as $value){
        echo "<li>$value\n</li>";
    }
    
    echo "<p><strong>Final Word Count:</strong></p>";
    echo count($quoteExplode);
    ?>
    
    <a href = "https://cosw30bjp.herokuapp.com/Homework/homework4/quote.html" class="button">Try Again?</button></a>
    
    
   






   </body> 
</html>