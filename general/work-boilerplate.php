<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
    echo ("<title>" . $artist_name . "</title>");
    ?>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="work_redirects.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <table class="table">
                <td id="menu">
                    <a href='about.html' class="menu-item">ABOUT</a>
                    <a href='work.html' class="menu-item">WORK</a>
                    <a href='contact.html' class="menu-item">CONTACT</a>
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
            <div class="projects">
                <?php
                for ($i = 0; $i < count($project_titles); $i++)
                {
                    echo("  <div class='project' onclick='redirect_window('" . $project_links[$i] . "')'>\n
                            <img src='" . $project_cover_photo[$i] . "' class='project-gallery-image'>\n
                            <div class='overlay'>\n
                            <div class='project-desc'>" . $project_titles[$i] . "</div>\n
                            </div>\n
                            </div>\n\n");
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