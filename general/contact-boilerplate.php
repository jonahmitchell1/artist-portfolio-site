<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
    echo ("<title>" . $artist_name . "</title>");
    ?>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="work_redirect.js"></script>
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
            <h1>CONTACT</h1>
            <?php
            echo(  "<h2>" . $artist_name . "</h2>\n
                    <p><a href='" . $instagram . "' target='_blank'>INSTAGRAM</a></p>\n
                    <p>E-MAIL: <a href='mailto:" . $email . "'>" . $email . "</a></p>
                    <p>VIMEO: <a href='" . $vimeo . "' target='_blank'>" . $vimeo . "</a></p>
            ");
            ?>
        </div>
      
        <footer>
            <?php
                echo("<p>" . $artist_name . " " . date("Y") . "</p>");
            ?>
        </footer>
    </div>

</body>
</html>