<!doctype=html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Sorting Arrays</title>
    </head>
    <body>


<?php
    
   
    $quote = $_POST['quote'];
    
    
    echo "<p><strong>Original Quote:</strong></p>";
        
    echo "<p>'$quote'</p>"; 
    
    $quoteExplode = explode(' ', $quote);
    
    echo "<p><strong>Word Count:</strong></p>";
   
    
    echo count($quoteExplode);
    
    
    echo "<p><strong>Quoted Words In Alphabetical Order:</strong></p>";
    
    natcasesort($quoteExplode);
        //echo "<li>'$quoteExplode'</li>";
    
    
    
    
    //ksort ($quoteExplode);
       foreach ($quoteExplode as $val) {
         echo "<li>' . $val . '\n</li>";
      }
    //
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