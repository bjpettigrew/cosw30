<?php
    
   
    $text = $_POST['text'];
    $textExplode = explode(' ', $text);
    
    
    
    echo 'Text Explode';
    print_r($textExplode);
    
    $shuffledText = shuffle($textExplode);
    
    echo 'Shuffled Text';
    print_r($textExplode);
    
    //foreach loop
    foreach($textExplode as $key => $value) {
        echo "<p> $key Value: $value</p>";
    }
    
    
    $textImplode = implode(' ', $textExplode);
    echo"<p>$textImplode</p>";

 for($i = 0; $i < $numParagraphs; $i++) {
    echo "<p>$textImplode</p>";
 }
 
//     output a paragraph
//     echo "<p>$text</p>"; 
// }
//foreach()
//while()


?>