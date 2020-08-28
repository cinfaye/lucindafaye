<!DOCTYPE html>
<!-- Page created by Lucinda Meckley
     Assignment: Hello World! -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hello World</title>
        <?php
            //php practice stuff, making variables
            $name = "Cindy M.";
            $age = 26;
            $favorite = "Bob's Burgers";
            $male = false;
            $imageFile = "img/bob-grill.jpg"  
        ?>
    </head>
    <body>
        <?php
            // using php to print in html
            echo "<p>Hello World, this is my PHP page!</p>";
            print("<p>My name is $name I am $age years old and I love $favorite.</p>");
            print('<p>I am using variables: $name, $age, and $favorite</p>');
            print("<img src = '$imageFile' height = '250'>");
        ?>
    </body>
</html>