<?php
$title = 'Escapism';
$description = 'A project on the brief of a visual 'personal manifesto'. It takes the form of these illustrated representations of space and architecture within a void-like environment. The work depicts a psychogeographical concept of interpreting ones mental space as a physical space, therefore seperating oneself from it, as a metaphorical tool for navigating ones mental battles.
Hypothetically challenging the pavements and staircases, the images suggest a creation of ones own map, a reaction to the physical confines of the urban environment. The concept of world-building is pushed further by an unknown language, supposedly a new understanding of these personal, mental spaces that supercedes human language. This again reflects notions of spacial engagement present in parkour, in which the physical challenges emulate emotional or tangible challenges faced in every day life.';
$artist_name = 'Max Mitchell';
$instagram = '';

$images = 'projects/escapism/images/';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
    echo ("<title>" . $title . "</title>");
    ?>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <table class="table">
                <td id="menu">
                    <a href='about.php' class="menu-item">ABOUT</a>
                    <a href='work.php' class="menu-item">WORK</a>
                    <a href='contact.php' class="menu-item">CONTACT</a>
                </td>
                <td id="logo">
                    <img src="general\logo.png" class="logo" alt="Max Mitchell" style="aspect-ratio: auto; width: 25vh; flex-grow: 3;">
                </td>
                <?php
                echo("<td id='placeholder'><a href='" . $instagram . "' target='_blank' class='menu-item'>INSTAGRAM</a></td>");
                ?>
            </table>
        </header>

        <div class="page-content">
            <div class="description">
            <?php
                echo ("<h1>" . strtoupper($title) . "</h1>");
                $array = preg_split("/\r\n|\n|\r/", $description);
                foreach ($array as $line) 
                {
                    echo "<p>" . $line . "</p>";
                }
                ?>
            </div>

            <div class="gallery">
                <?php
                if (isset($videos)) {
                    $files = scandir($videos);
                    for ($i = 0; $i < count($files); $i++) {
                        if(preg_match("/^[^\?]+\.(mp3|mp4)(?:\?|$)/", $files[$i])) {
                            echo("<iframe title='Video Player' class='embed-content' src='" . $videos . $files[i] . "' frameborder='0' allowfullscreen width='75%' height='75%'></iframe>");
                        }  
                    }
                }

                $files = scandir($images);
                for ($i = 0; $i < count($files); $i++) {
                    if(preg_match("/^[^\?]+\.(jpg|jpeg|gif|png)(?:\?|$)/", $files[$i])) {
                        echo("<img src='" . $images . $files[$i] . "' class='gallery-image'>");
                    }  
                }
                ?>
            </div>
            
        </div>

        <footer>
            <?php
                echo("<p>" . $artist_name . " " . date("Y") . "</p>");
            ?>
        </footer>
    </div>

</body>
</html>