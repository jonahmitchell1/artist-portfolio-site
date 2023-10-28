<?php
$title = 'Playground Mentality';
$description = 'PLAYGROUND MENTALITY
*****another warning for flashing images*****
A second attempt at an animated short film, this further explores techniques and ideas seen in OPTIMA, with more of a focus on individual looped animations; found objects, illustration, photography and heavy digital manipulation. The film is open to interpretation, but is based around ideas of how we psychologically place ourselves within a space, and the countless instances that feed into our perception of space and therefore our identity.
It promotes the perception of our environment [found objects, photos] as open to creative exploration. Reflecting concepts of parkour philosophy and approach to spacial interaction, metaphorically 'opening up' these images through movement, and figuratively creating subsequent 'digital spaces' for the viewer to inhabit. 
music: Wish by Blood Orange
Klavierwerke by James Blake';
$artist_name = 'Max Mitchell';
$instagram = 'https://www.instagram.com/_max.ink/';

$images = 'projects/playground-mentality/images/';

$videos = 'projects/playground-mentality/videos/';
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