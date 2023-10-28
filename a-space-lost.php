<?php
$title = 'A Space Lost';
$description = 'A SPACE LOST
A visual exploration of ‘Lost’ as a quality or description, what makes something feel lost. A series of images connected by a imaginary, utopian world.
Consistent blue buildings, green floors and red accents give the sense of moving through a city, linked by architectural elements. Guided by indication of past events through recurring objects that give hints to a narrative, an unknown story of someone, or of those who inhabit the city.';
$artist_name = 'Max Mitchell';
$instagram = 'https://www.instagram.com/_max.ink/';

$images = 'projects/a-space-lost/images/';
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