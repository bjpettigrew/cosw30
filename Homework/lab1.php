<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Labwork 1: Hello World</title>
        <style>
          @import url('https://fonts.googleapis.com/css?family=Fredericka+the+Great|Special+Elite&display=swap');
          header {
            text-align: center;
            font-family: 'Fredericka the Great', cursive;
            color: #003;
                }
          body {
            background-color: #ffe6e6;
               }
            section {
            margin: 1%;  
            padding: 2%;
            background-color: #ccd9ff;
            color: #003;
            font-family: 'Special Elite', cursive;
              }
        </style>
    </head>
    
    <body>
    <?php
        /*
        echo "file lab1.php created by Bayleigh Pettigrew for COSW 20 PHP and MySQL class, Fall 2019 at Long Beach City College on September 1, 2019";
        */
    ?>
        <header>
            <h1>Bayleigh J. Pettigrew</h1>
        </header>
        <section>
            <p>This is my sixth computer-related class at LBCC.  I have been eagerly awaiting the day I would discover the "missing link" between front-end design and back-end database management.  
                My favorite computer game as a kid was Frogger [the OG mega-pixelated version] but at the pizza parlor I preferred to spend my quarters on music rather than PacMan or Centipede.  
                I also played Space Invaders on occasion.</p>
            <p>I spent years in retail and retail management while training as a figure skater, then became a coach while also working in management in high-end designer boutiques on Rodea and at South Coast Plaza.
               Then I went back to school online while working, went to UCLA for law school, served as a criminal prosecutor at the city, county and federal level, and currently love my job doing my part
                fighting to keep dangerous drugs, contraband, counterfeits, and human trafficking from the U.S.</p>
                <p>In classes I like to be creative and design outside my comfort level just to try different themes and color combinations that I probably would do for a client and certainly not likely for myself
                (aside from the taxi cursor I figured out for my NYC project in COSW 10 because that is exactly the humorous touch I would add).  My <a href="https://www.starshinedna.com">final project website</a>for the COSW 10
                class best reflects my tastes.  Please also feel free to visit my <a href="https://github.com/bjpettigrew/cosw30">GitHub profile.</a></p>
            <p>Things I like to do in my spare time away from work include:</p>
                <ul>
                    <li>Taking classes in subjects that have nothing to do with my work</li>
                    <li>Volunteering with foster children, including the one that lives with me on weekends</li>
                    <li>Working on rehabbing my injuries so I can go back to aerial dance training</li>
                    <li>Training to fast enough to not be "swept up" in my first (walking) half-marathon for St. Jude's in November</li>
                    <li>Reading light fiction - particularly crime fiction</li>
                </ul>
            </p>
        
            <?php
                echo '<p>I love to research anything that catches my interest, so obviously one of my favorite websites is the <a href="www.google.com">Google</a> search engine.  
                         Another favorite is <a href="www.spotify.com">Spotify</a>, which allows me to throw on any genre of music depending on my mood and discover new songs I would not have come across on my own.</p>';
                echo '<p>Ironically, the hardest thing that I found about this assignment so far was that I was so scared of messing up the PHP that I spent some time scouring the book thinking that if variable, concatenate,
                         and constants are assigned <em>values</em>, did the assignment mean we needed to use at least three and were those properties.  Then I realized that instruction was in the CSS section, and took
                         Swifty\'s advice to "Calm Down".  Also, using Brackets and CodePen, I have not done much stying in my head section, so that also made me nervous.  And although I am not there yet, 
                         I am fairly confident in my ability to get confused trying to transfer the code to GitHub to Heroku.</p>';
            ?>
        </section>

    </body>

</html>