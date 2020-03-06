<?php
error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 1);
require_once 'connection.php';
$conn = OpenCon();
?>
<!DOCTYPE html>
<html lang="en">
<head>   
    <link href="style2.css" rel="stylesheet" media="screen" type="text/css"/>
</head>
<body>
<div id="mainTest">
    <?php
    require_once 'calendar.php';
    ?>
</div>
<div class="flexbox">
    <div class="item">
        <form action="index.php" method="post">
        Add a new Event to the Calendar!<br>
        Committee Hosting the Event (this will be a drop down list):<br><input type="text" name="author"><br>
        Event Title:<br><input type="text" name="newsTitle"><br>
        Event Location:<br><input type="text" name="newsTitle"><br>
        Event Time (this will be a mini-calendar):<br><input type="text" name="newsTitle"><br>
        Event Description:<br><textarea name="newsBody" rows="4" cols="80"></textarea><br>
        <div class="button"><input type="submit" name="submit" value="newEvent" /></div>
        </form>
    </div>
</div>
<?php
CloseCon($conn);
?>
</body>
</html>
