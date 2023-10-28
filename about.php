<?php
$artist_name = 'Max Mitchell';
$artist_description = 'Max Mitchell is a multi-disciplinary creator, whose work is commonly characterized by the spaces we inhabit, create, and engage with on a physical, emotional, philosophical, and psychogeographical level. Whether translated through his experience with parkour and street dance, or from his aesthetic background in drawing, photography and collage, the concept of interacting with space is consistent.
A notion of mindfulness towards our dialogical relationship with our surroundings, physically and mentally, runs through his work. He promotes a reconnection with the playground mentality we held as children and a redefining of how we perceive the world around us, commenting on topics of public space, playground design and street-originated sports.
Having studied photography for 3 years and now in his final year studying illustration, his work challenges the interpretation of space through various media, covering areas of illustration, design, animation and sculpture. From ink, pencil and paint to animation, bricolage and scanography, he consistently combines analogue and digital methods, playing with concepts of collaborative human-computer input and collage in every sense of the word. An avid observer and collector of our constructed (and destructed) environment, found objects, shapes, architecture, and personal memory make their way into his work as blueprints for imagined spaces, splintered with fragments of reality. He admires the simplicity of brutalism and the blank canvas it presents (both through the lens of art and parkour), informing the tangible, euclidian geometric style he commonly adopts. Through this he experiments with how shadow and shape can create a space for us to inhabit.';
$instagram = 'https://www.instagram.com/_max.ink/';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
    echo ("<title>" . $artist_name . "</title>");
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
                    <img src="general\logo.png" class="logo" alt="<?php echo $artist_name; ?>" style="aspect-ratio: auto; width: 25vh;">
                </td>
                <?php
                echo("<td id='placeholder'><a href='" . $instagram . "' target='_blank' class='menu-item'>INSTAGRAM</a></td>");
                ?>
            </table>
        </header>

        <div class="page-content">
            <div class="description">
                <h1>ABOUT</h1>
                <?php
                    $lines = preg_split("/\r\n|\n|\r/", $artist_description);
                    foreach ($lines as $line) {
                        echo "<p>" . $line . "</p>";
                    }

                    $path = "general\about-images/";
                    $files = scandir($path);
                    for ($i = 0; $i < count($files); $i++) {
                        if(preg_match("/^[^\?]+\.(jpg|jpeg|gif|png)(?:\?|$)/", $files[$i])) {
                            echo("<img src='" . $path . $files[$i] . "' class='centered-image'>");
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