<?php
session_start();

// If no username is stored in the session, show a warning and stop the page
if (!isset($_SESSION['username'])) {
    echo '<p style="color:red;">It looks like you haven’t entered any information to store in the session. Please go back and enter your username.</p>';
    echo '<p><a href="index.php">Return to the form</a></p>';
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<body>
    <h1>Welcome back, <!-- Type your echo command here--></h1>
    <p>This name is remembered from the previous page using PHP sessions.</p>

    <p><a href="logout.php">End Session</a></p>
</body>
</html>
