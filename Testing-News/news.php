<?php
// SQL Statement that pulls the three most recent news items
$sql = "SELECT * FROM news ORDER BY NewsDate DESC LIMIT 3";
if($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
            echo "<tr>";
                echo "<th colspan='2'><h1>News! Straight From the Non-Profit Source</h1></th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td colspan='2'><h2>".$row['NewsTitle']."</h2></td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td><i>".$row['Author']."</i></td>";
                echo "<td id='date'><i>".date('m/d/Y', strtotime($row['NewsDate']))."</i></td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td colspan='2'>".nl2br($row['NewsBody'])."</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not execute $sql.";
}
?>
