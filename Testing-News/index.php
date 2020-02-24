<?php
// Error Reporting
error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 1);
// Connection the Database
require_once 'connection.php';
$conn = OpenCon();
// Update Button
if (isset($_POST['submit'])) {
    $author = $_POST['author'];
    $newsTitle = $_POST['newsTitle'];
    $newsBody = $_POST['newsBody'];
    $sql = "INSERT INTO news (Author, NewsTitle, NewsBody) VALUES ('$author', '$newsTitle', '$newsBody')";
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
        <?php
        // Loads the news and structures it in a table 
        require_once 'news.php';
        ?>
    </div>
    <div class="item">
        <form action="index.php" method="post">
        Name of Author:<br><input type="text" name="author"><br>
        Title of News Article:<br><input type="text" name="newsTitle"><br>
        News Body:<br><textarea name="newsBody" rows="4" cols="80"></textarea><br>
        <div class="button"><input type="submit" name="submit" value="Update" /></div>
        </form>
    </div>
</div>
<?php
    CloseCon($conn);
?>
</body>
</html>
