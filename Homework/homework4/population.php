<!doctype=html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Population Table</title>
      <style>
          body {
              background-color: #D3F0D2;
              padding: 3% 8%;
          }
          
          #table1 {
            float:left;
            margin: 2% 5% auto auto;
          }
          
          #table2 {
            margin: 2% 5% auto auto;
          }
          
          h1 {
            text-align: center;
          }    
              
      </style>
    </head>
      
    <body>
      <div id="table1">
        <table border="2" cellspacing="3" cellpadding="3" align="center">
        <thead>
            <tr>
                <td colspan="3"><strong><h1>The Fifteen Most Populous Cities<br> As Of July 1, 2017</h1></strong></td>
            </tr>
            
            <tr>
                <th><h2>Rank</h2></th>
                <th><h2>City, State</h2></th>
                <th><h2>2017 Total Population</h2></th>
            </tr>
            
        </thead> 
        <tbody>
                <?php # Script 2.8 - sorting.php
                $poptable = [
                    'New York, New York' => '8,622,698',
                    'Los Angeles, California' => '3,999,759',
                    'Chicago, Illinois' => '2,716,450',
                    'Houston, Texas' => '2,312,717',
                    'Phoenix, Arizona' => '1,626,078',
                    'Philadelphia, Pennsylvania' => '1,580,863',
                    'San Antonio, Texas' => '1,511,946',
                    'San Diego, California' => '1,419,516',
                    'Dallas, Texas' => '1,341,075',
                    'San Jose, California' => '1,035,317',
                    'Austin, Texas' => '950,715',
                    'Jacksonville, Florida' => '892,062',
                    'San Francisco, California' => '884,363',
                    'Columbus, Ohio' => '879,170',
                    'Fort Worth, Texas' => '874,168'
                    ];
          //echo '<tr><td colspan="3"><strong>In Order of Population:</strong></td></tr>';
          
           
          $counter = 0;     
          foreach ($poptable as $k => $v) {
            $counter++;
              echo "<tr><td>$counter</td>
                   <td>$k</td>
                   <td>$v</td></tr>\n";
            
          }
           
        
        ?>
        </tbody>
        </table>
        </div>
        
        <div id="table2">
        <?php # Script 2.8 - sorting.php
        $poptable = [
                    'New York, New York' => '8,622,698',
                    'Los Angeles, California' => '3,999,759',
                    'Chicago, Illinois' => '2,716,450',
                    'Houston, Texas' => '2,312,717',
                    'Phoenix, Arizona' => '1,626,078',
                    'Philadelphia, Pennsylvania' => '1,580,863',
                    'San Antonio, Texas' => '1,511,946',
                    'San Diego, California' => '1,419,516',
                    'Dallas, Texas' => '1,341,075',
                    'San Jose, California' => '1,035,317',
                    'Austin, Texas' => '950,715',
                    'Jacksonville, Florida' => '892,062',
                    'San Francisco, California' => '884,363',
                    'Columbus, Ohio' => '879,170',
                    'Fort Worth, Texas' => '874,168'
                    ];
                    
              
                    
              //array_multisort($k, SORT_ASC, $v, $poptable);
        
        ?>
        
        
        
        <table border="2" cellspacing="3" cellpadding="3" align="center">
        <thead>
            <tr>
                <td colspan="3"><strong><h1>The Fifteen Most Populous Cities<br> In Alphabetical Order</h1></strong></td>
            </tr>
            
            <tr>
                <th><h2> </h2></th>
                <th><h2>City, State</h2></th>
                <th><h2>2017 Total Population</h2></th>
            </tr>
            
        </thead> 
        
        
        
        <tbody> 
        <?php
          $counter = 0;  
         
          ksort($poptable);
          foreach ($poptable as $k => $v) {
          $counter++;
          echo "<tr><td>$counter</td>
                <td>$k</td>
                <td>$v</td></tr>\n";
          }
          
            ?>
          </tbody>    

            
        </table>
        </div>
      
      
  
    </body>
 </html>     
      
              