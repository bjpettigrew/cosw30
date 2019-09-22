<!doctype=html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Sorting Arrays</title>
    </head>
    <body>


<?php
    
   
    $quote = $_POST['quote'];
    
    echo '<strong>Original Quote</strong';
    
    echo '<p>$quote</p>'; 
    echo '<p>Word Count:</p>';
    echo 'str_wrd_count("$quote")';
    
    echo '<strong>Quoted Words In Alphabetical Order:</strong>';
    sort ($quote, SORT_NATURAL);
        foreach ($quote as $key => $val) {
            echo "quote [" . $key . "] = " . $val . "\n";
        }
    
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