<?php
error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 1);
require_once 'connection.php';
require_once 'committeeList.php';
$conn = OpenCon();
// Update Button
if (isset($_POST['submit'])) {
    if (isseet($_POST['committee'])) {
        $selectList = $_POST['committee'];
        switch ($selectList) {
            case 'committee1': $committeeID = 1; break;
            case 'committee2': $committeeID = 2; break;
            default: break;
        }
    }
    $title = $_POST['title'];
    $location = $_POST['location'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $description = $_POST['description'];
    $sql = "INSERT INTO events (CommitteeID, EventName, EventStartDate, EventEndDate, Location, EventDesc) VALUES ('$committeeID', '$title', '$location', '$startDate', '$endDate', '$description')";
    mysqli_query($conn, $sql);
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div class="flexbox">
    <div class="item">
        <form action="index.php" method="post">
        <h1>Add a new event to the Calendar!</h1><br><br>
        Committee Hosting the Event:<br>
            <select name="committee" id="committee">
                <?php
                $sqlCommittee = "SELECT CommitteeID FROM committees";
                if ($resultCommittee = mysqli_query($conn, $sqlCommittee)) {
                    if (mysqli_num_rows($resultCommittee) > 0) {
                        while ($row = mysqli_fetch_array($resultCommittee)) {
                            $committeeNumber = $row['CommitteeID'];
                            $committeeName = $committeeList[$committeeNumber - 1];
                            echo "<option value=\"committee$committeeNumber\">".$committeeName."</option>";
                        }
                    } else {
                        echo "No records matching your query were found.";
                    }
                } else {
                    echo "ERROR: Could not execute $sqlCommittee";
                }
                ?>
            </select><br>
        Event Title:<br><input type="text" name="title"><br>
        Event Location:<br><input type="text" name="location"><br>
        Event Start Time:<br><input type="text" name="startDate"><br>
        Event End Time:<br><input type="text" name="endDate"><br>
        Event Description:<br><textarea name="description" rows="4" cols="80"></textarea><br>
        <div class="button"><input type="submit" name="submit" value="Submit" /></div>
        </form>
    </div>
</div>
<?php
CloseCon($conn);
?>
</body>
</html>
