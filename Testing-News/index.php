<?php
error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 1);
require_once 'connection.php';
$conn = OpenCon();
// Update Button
if(isset($_POST['submit'])) {
    $sql = "INSERT INTO TestTable (News) VALUES ('".$_POST['news']."')";
    mysqli_query($conn, $sql);
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="style.css" rel="stylesheet" media="screen"/>
</head>
<body>
<div class="flexbox">
    <div class="item">
        <?php require_once 'news.php';?>
    </div>
    <div class="item">
        <form action="index.php" method="post">
        News:<br><input type="text" name="news"><br>
        <div class="button"><input type="submit" name="submit" value="Update" /></div>
        </form>
    </div>
</div>
<?php
    CloseCon($conn);
?>
</body>
</html>
