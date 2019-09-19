<?php
    $numParagraphs = $_POST['paragraphs'];
    
    
    //$text="Spare ribs tenderloin andouille rump turkey beef ribs tri-tip sausage 
   // alcatra bacon sirloin. Tail meatball spare ribs short ribs, flank brisket
   //pig biltong tri-tip sirloin chuck cow pork loin alcatra bacon. Burgdoggen 
  // ground round jowl, frankfurter cupim picanha meatball beef tri-tip meatloaf 
   //boudin ribeye spare ribs fatback. Pork buffalo flank landjaeger, 
   //sausage ground round chicken porchetta hamburger turducken tongue 
   //chuck sirloin short ribs. Meatball pork loin beef, prosciutto fatback alcatra 
   //chicken shank ball tip brisket short ribs pork tongue. Kielbasa venison flank 
   //t-bone swine tri-tip, ribeye hamburger pork belly. Ground round pig short 
   //ribs biltong.";
   
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