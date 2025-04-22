<?php

$mysqli = new mysqli ("localhost", "root", "", "books");

$sql = "SELECT * from book_info";

$result = $mysqli -> query($sql);
?>
<table border=1>

<?php
while ($row = $result -> fetch_row()){
    //echo "<p>".$row[0]."<p>";
?>

<tr><td> <?php echo $row[0]; ?></td></tr>

<?php } ?>

</table>