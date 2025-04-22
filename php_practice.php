<!DOCTYPE html>
<html>
    <title>Hello PHP</title>
    <body>
        <?php
        error_reporting(E_ALL);
        ini_set("display_error", 1);
        $name = "PHP";
        echo "<h1> Hello, $name!<h1>";
        $number = 50;
        echo "<p> Number: $number<p>";
        ?>
    </body>
</html>