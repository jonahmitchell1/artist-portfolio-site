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