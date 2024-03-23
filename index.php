<?php
    /* 
    Task 1: Prompt the user for the blog post title, author, and category.
    
    Resources:
        https://www.geeksforgeeks.org/how-to-execute-php-code-using-command-line/
        https://www.w3schools.com/php/php_file_open.asp#:~:text=PHP%20Read%20Single%20Line%20%2D%20fgets,single%20line%20from%20a%20file.
    */

    $title = (string)readline("Blog post title: ");
    $author = (string)readline("Author: ");
    $category = (string)readline("Category: ");

    /*
    Task 2: Accept an optional command-line argument for the output directory. 
    If no output directory is provided, use the current working directory.
    
    Resources:
        https://www.php.net/manual/en/function.getcwd.php
        https://stackoverflow.com/questions/11349151/php-check-if-empty-line-n
    */

    $output_directory = (string)readline("Output Directory: ");
    if (trim($output_directory) == '') {
        $output_directory = getcwd();
    }
    
?>
