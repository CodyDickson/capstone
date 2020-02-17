<?php
// SQL Statement that pulls the three most recent news items
$sql = "SELECT * FROM TestTable ORDER BY Date DESC LIMIT 3";
if($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
            echo "<tr>";
                echo "<th>IntNum</th>";
                echo "<th>News</th>";
                echo "<th>Date</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['IntNum'] . "</td>";
                echo "<td>" . $row['News'] . "</td>";
                echo "<td>" . date('m/d/Y', strtotime($row['Date'])) . "</td>";
            echo "</tr>";            
        }
        echo "</table>";
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not execute $sql.".mysqli_error($link);
}
?>
