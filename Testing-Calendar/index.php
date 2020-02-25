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
<?php
CloseCon($conn);
?>
</body>
</html>
