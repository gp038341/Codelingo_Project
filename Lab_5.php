<?php

    $mysqli = new mysqli ("localhost", "root", "", "jbu_library");

    $sql = "SELECT * from books";

    $result = $mysqli -> query($sql);
?>

<table class = "table" border=1>

<?php
while ($row = $result -> fetch_row()){
    //echo "<p>".$row[0]."<p>";
?>

<tr>
    <td> <?php echo $row[0]; ?></td>
    <td> <?php echo $row[1]; ?></td>
    <td> <?php echo $row[2]; ?></td>
    <td> <?php echo $row[3]; ?></td>
    <td><img src = <?php echo $row[4];?> alt="book image" width = "100" height="150"></td>
    
</tr>

<?php } ?>

</table>

<html lang="en">
    <head>
        <style>
                .background
                {
                    background-color: blue;
                }
                .table
                {
                    margin: 40px 650px;
                    background-color: white;
                    width: 500px;
                    height: 50px;
                    text-align: center;
                    padding: 5px;
                    border: 5px solid black;
                }
                .button1
                {
                    margin: 15px 800px;
                    bottom: 25%;
                    background-color: rgb(255, 255, 255);
                    width: 200px;
                    height: 100px;
                    text-align: center;
                    padding: 5px;

                    border: 5px solid rgb(0, 0, 0);
                    font-family: "Comic Sans MS";
                    font-size: 35px;
                    color: rgb(0, 0, 0);
                }
                .button1:hover
                {
                    margin: 15px 800px;
                    bottom: 25%;
                    background-color: rgb(226, 226, 226);
                    width: 200px;
                    height: 100px;
                    text-align: center;
                    padding: 5px;
                    border: 5px solid rgb(0, 0, 0);
                    font-family: "Comic Sans MS";
                    font-size: 35px;
                    color: rgb(0, 0, 0);
                    
                }
                .button2
                {
                    margin: 85px 800px;
                    bottom: 25%;
                    background-color: rgb(255, 255, 255);
                    width: 200px;
                    height: 100px;
                    text-align: center;
                    padding: 5px;

                    border: 5px solid rgb(0, 0, 0);
                    font-family: "Comic Sans MS";
                    font-size: 35px;
                    color: rgb(0, 0, 0);
                }
                .button2:hover
                {
                    margin: 85px 800px;
                    bottom: 25%;
                    background-color: rgb(226, 226, 226);
                    width: 200px;
                    height: 100px;
                    text-align: center;
                    padding: 5px;
                    border: 5px solid rgb(0, 0, 0);
                    font-family: "Comic Sans MS";
                    font-size: 35px;
                    color: rgb(0, 0, 0);
                    
                }
        </style>
    </head>
    <body class = "background">
        <a href = "add_book.html"><button class = "button1">Add</button></a>
        <a href = "del_book.html"><button class = "button1">Delete</button></a>
    </body>