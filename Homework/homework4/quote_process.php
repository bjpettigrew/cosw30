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
    
    echo "<p>$extraExplode</p>";
    
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
    
    $a = $quoteExplode;
    $b = $extraExplode;
    $c = $a . $b;
    $cExplode = explode(' ', $c);
    
    echo "<p>'$c'\n</p>";
    
    
    echo count($c);
    
    
    
    //$quoteExplode = explode(' ', $quote);
    
    
    
   // echo 'Text Explode';
    //print_r($textExplode);
    
    //$shuffledText = shuffle($textExplode);
    
    //echo 'Shuffled Text';
   // print_r($textExplode);
    
    //foreach loop
    //foreach($textExplode as $key => $value) {
    //    echo "<p> $key Value: $value</p>";
    //}
    
    
    //$textImplode = implode(' ', $textExplode);
    //echo"<p>$textImplode</p>";

 //for($i = 0; $i < $numParagraphs; $i++) {
    //echo "<p>$textImplode</p>";
 //}
 
//     output a paragraph
//     echo "<p>$text</p>"; 
// }
//foreach()
//while()


?>



   </body> 
</html>