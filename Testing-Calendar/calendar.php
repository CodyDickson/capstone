<?php
$monthTracker = array(false, false, false, false, false, false, false, false, false, false, false, false);
$monthList = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
$committeeList = array("Fundraising");

$sql = "SELECT * FROM events ORDER BY EventStartDate";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        while ($row = mysqli_fetch_array($result)) {
            $month = date("m", strtotime($row['EventStartDate']));
            if ($monthTracker[($month - 1)] == false) {
                echo "<tr>";
                    echo "<th colspan='2'><h1>".$monthList[($month - 1)]."</h1></th>";
                echo "</tr>";
                $monthTracker[($month - 1)] = true;
            }
            echo "<tr>";
                echo "<td><h2>".$row['EventName']."</h2></td>";
            echo "</tr>";
            echo "<tr>";
                $committeeName = $committeeList[($row["CommitteeID"]) - 1];
                echo "<td><i>Hosted by the $committeeName Committee</i></td>";
            echo "</tr>";
            echo"<tr>";
                echo "<td id='date'>Start Date: ".date('m/d/Y', strtotime($row['EventStartDate']))." - End Date: ".date('m/d/Y', strtotime($row['EventEndDate']))."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>Location: ".$row['Location']."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td colspan='2'>".$row['EventDesc']."</td>";
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
