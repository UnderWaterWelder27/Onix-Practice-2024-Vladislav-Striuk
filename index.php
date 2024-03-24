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
    echo "Choosen directory: $output_directory \n";

    /*
    Task 3: Generate a unique filename for the blog post using the format 
    "title-author-timestamp.md" (e.g., "my-first-post-johndoe-202304181430.md")
    
    Resources:
        https://stackoverflow.com/questions/28977793/convert-spaces-to-dash-and-lowercase-with-php
        https://www.w3schools.com/php/php_date.asp
    */

    $timestamp = date("YmdHis");
    $filename = (str_replace(' ', '-', strtolower($title))) . '-' . (str_replace(' ', '-', strtolower($author))) . '-' . $timestamp . '.md';
    $filepath = $output_directory . '/' . $filename;
    echo "Filename: $filename \n";
    
    /*
    Task 4: Create a markdown file with the generated filename in the specified output directory
    
    Resources:
        https://stackoverflow.com/questions/34624784/use-fwrite-to-create-an-md-file
    */

    $markdown_file = fopen($filepath, 'w') or die("Unable to create file!");
    
    /*
    Task 5: Write the blog post template to the markdown file, including the 
    title, author, category, and current date as metadata, 
    followed by a placeholder for the blog post content.
 
    Resources:
       https://www.w3schools.com/php/php_file_open.asp
       https://stackoverflow.com/questions/34624784/use-fwrite-to-create-an-md-file 
    */

    $content = "---\n";
    $content .= "title: \"$title\"\n";
    $content .= "author: \"$author\"\n";
    $content .= "category: \"$category\"\n";
    $content .= "date: \"" . date("Y-m-d") . "\"\n";
    $content .= "---\n\n";
    $content .= "Write your blog post content here...\n";

    fwrite($markdown_file, $content);
    fclose($markdown_file);
?>
