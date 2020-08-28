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
            $icecream = "Chocolate Chip Cookie Dough";
            $male = false;
            $imageFile = "img/bob-grill.jpg"  
        ?>
    </head>
    <body>
        <?php
            // using php to print in html
            echo "<p>Hello World, this is my PHP page!</p>";
            print("<p>My name is $name I am $age years old. My facorite icecream is $icecream</p>")
        ?>
    </body>
</html>