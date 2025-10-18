<?php
session_start(); // Resume the session so we can access the data
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<body>
    <h1>Welcome back, <?php echo $_SESSION['username']; ?>!</h1>
    <p>This name is remembered from the previous page using PHP sessions.</p>

    <p><a href="logout.php">End Session</a></p>
</body>
</html>
