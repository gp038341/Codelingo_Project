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
    $book_name = $_GET["book_name"];

    $mysqli = new mysqli ("localhost", "root", "", "jbu_library");
    $sql = "DELETE FROM books WHERE book_name = '$book_name'";
    $result = $mysqli -> query($sql);
    echo "<p>Book with Name - $book_name has been deleted</p>";
?>
<body class = background>
    <a href = "JBU_Library.html"><button class = "button1">Return to Library Home Page</button></a>
</body>