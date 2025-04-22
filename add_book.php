<style>
    .background
    {
        background-color: blue;
    }
    .button1
    {
        margin: 85px 800px;
        bottom: 25%;
        background-color: rgb(255, 255, 255);
        width: 200px;
        height: 200px;
        text-align: center;
        padding: 5px;

        border: 5px solid rgb(0, 0, 0);
        font-family: "Comic Sans MS";
        font-size: 35px;
        color: rgb(0, 0, 0);
    }
    .button1:hover
    {
        margin: 85px 800px;
        bottom: 25%;
        background-color: rgb(226, 226, 226);
        width: 200px;
        height: 200px;
        text-align: center;
        padding: 5px;
        border: 5px solid rgb(0, 0, 0);
        font-family: "Comic Sans MS";
        font-size: 35px;
        color: rgb(0, 0, 0);
                    
    }
</style>
<?php
    $id = $_GET["id"];
    $book_name = $_GET["book_name"];
    $author = $_GET["author"];
    $year = $_GET["year"];
    $image = $_GET["image"];

    $mysqli = new mysqli ("localhost", "root", "", "jbu_library");
    $sql = "INSERT INTO books (id, book_name, author, year, img) VALUES ('$id', '$book_name', '$author', '$year', '$image')";
    $result = $mysqli -> query($sql);

    echo "<p>Book with ID - $id, Name - $book_name, Author - $author, Year - $year, Image - $image, has been added</p>";
?>

<body class = "background">
    <a href = "JBU_Library.html"><button class = "button1">Return to Library Home Page</button></a>
</body>