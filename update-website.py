import os

f = open('general/instagram.txt', 'r')
instagram = f.read()
f.close()

f = open('general/artist-name.txt', 'r')
artist_name = f.read()
f.close()

def create_about_page():
    f = open('general/artist-description.txt', 'r')
    artist_description = f.read()
    f.close()

    str = "<?php\n$artist_name = '" + artist_name + "';\n$artist_description = '" + artist_description + "';\n$instagram = '" + instagram + "';\n?>\n"
    
    # add boilerplate php for page generation
    f = open('general/about-boilerplate.php', 'r')
    boilerplate = f.read()
    f.close()

    str += boilerplate

    # Create/update php page for project
    f = open('about.php', 'w')
    f.write(str)

def create_project_page(project_name):
    # Get title and description
    f = open('projects/' + project_name + '/title.txt', 'r')
    title = f.read()
    f.close()

    f = open('projects/' + project_name + '/description.txt', 'r')
    description = f.read()
    f.close()

    str = "<?php\n$title = '" + title + "';\n$description = '" + description + "';\n$artist_name = '" + artist_name + "';\n$instagram = '" + instagram + "';\n"

    # Check if images and videos subdirectories exist
    entries = os.listdir('projects/' + project_name)

    if "images" in entries:
        str += "\n$images = 'projects/" + project_name + "/images/';\n"
    if "videos" in entries:
        str += "\n$videos = 'projects/" + project_name + "/videos/';\n"

    str += "?>\n"
    
    # add boilerplate php for page generation
    f = open('general/boilerplate.php', 'r')
    boilerplate = f.read()
    f.close()

    str += boilerplate

    # Create/update php page for project
    f = open(project_name + '.php', 'w')
    f.write(str)

if __name__ == '__main__':
    # Generate about page
    create_about_page()

    # Find all projects
    entries = os.listdir('projects/')
    for entry in entries:
        create_project_page(entry)