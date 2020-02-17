<?php
error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 1);
require_once 'calendar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>   
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div>
    <h1>FEBRUARY</h1>
    <h2>Event Name</h2>
    <h3>Start Date to End Date</h3>
    <h3>Event Location</h3>
    <h3>Hosted by Committee</h3>
    <div>Description of the event.</div>
    <div>----------</div>
    <h1>MARCH</h1>
    <h2>Event Name</h2>
    <h3>Start Date to End Date</h3>
    <h3>Event Location</h3>
    <h3>Hosted by Committee</h3>
    <div>Description of the event.</div>
    <button>Edit</button><button>Delete</button>
    <div>----------</div>
</div>
<div>
    <div>----------</div>
    <button>New Event</button>
    <div>----------</div>
    <h1>FEBRUARY</h1>
    <div>Event Name <button>Edit</button><button>Delete</button></div>
    <div>Event Name <button>Edit</button><button>Delete</button></div>
    <div>----------</div>
</div>
</body>
</html>
