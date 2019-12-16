* WP Theme-Template 

The following is a detailed explanation of the working components of this theme template. The file architecture here is designed to make development of custom WP themes easy by way of a SASS compiler and a live reload system. 

The following files must be in place for this system to work:

1. "index.php" - WP looks for this file when building the theme and uses it as the template for any unknown URL strings (in the absence of a single.php file). It does not necessarily need to have content, but it does need to exist. 

2. "home.php" - This file will supersede index.php as the default page when the root URL is navigated to. Include header/footer.php here, if so desired. 

3. "functions.php" - This file contains directions that tell WP to include the style.css file, as well as any .js files that may be used as part of the site's functionality. Add any site functionality here. 

4. "gulpfile.js" - When we create a new instance of this template, we need to first install all packages to the new directory (changing names as suits the project), one of which is the gulp package. When run, gulp will look for a gulpFile for directions. These directions exist as a series of functions, which we can call from the command line. As it is, we have two tasks, style and watch. 'Style' compiles our sass file into a style.css file that WP needs in the root directory of the theme. 
    - Eventually, other tasks will be added here, such as a prefixer, and a minifier. 

5. "settings.js" - This file contains the URL that the gulfile will send our project data to. Here we add the local directory for the WP site we're working with, and we'll be able to access the site as we build it through the .local URL string. However, we can also access the site from the localserver that it creates, which will actually live reload our changes. 