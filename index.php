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

    echo "$title, $author, $category";
?>
