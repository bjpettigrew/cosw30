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
              padding: 3% 8%;
          }
          
          h1 {
              text-align: center;
          }
          h3 {
              text-align: center;
          }
          
          #left_box {
              border: 3px ridge #54A352;
              float: left;
              margin: 2%;
              width: 40%;
              padding: 2%;
          }
          #right_box {
              border: 3px ridge #54A352;
              float: left;
              margin: 2%;
              width: 40%;
              padding: 2%;
          }
          
          
         .button {
         background-color: #D3F0D2;
         border: 3px ridge #54A352;
         color: #366835;
         padding: 15px 24px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 14px;
         margin: 4px 2px;
         cursor: pointer;
         }
          
          
      </style>
    </head>
    <body>


<?php
    
   
    $quote = $_POST['quote'];
    $extra = $_POST['extra'];
    
    
    echo "<h1><strong>Original Quote:</strong></h1>";
        
    echo "<h3><strong>\"$quote\"</strong></h3>"; 
    
    $quoteExplode = explode(' ', $quote);
    $extraExplode = explode(' ', $extra);
    ?>
    <div id="left_box">
    <?php
    echo "<p><strong>Word Count:</strong></p>";
   
    
    echo count($quoteExplode);
    
    
    echo "<p><strong>Quoted Words In Alphabetical Order:</strong></p>";
    
    natcasesort($quoteExplode);
        
       foreach ($quoteExplode as $val) {
         echo "<li>$val\n</li>";
      }
    
    echo "<p><strong>Quoted Words In Reverse-Alphabetical Order:</strong></p>";
    
    rnatcasesort($quoteExplode);
        
       foreach ($quoteExplode as $val) {
         echo "<li>$val\n</li>";
      }
    ?>
    
    </div>
    <div id="right_box">
    <?php
    
    
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
    </div>
    <br>
    <br>
    <a href = "https://cosw30bjp.herokuapp.com/Homework/homework4/quote.html" class="button">Try Again?</button></a>
    
    
   






   </body> 
</html>