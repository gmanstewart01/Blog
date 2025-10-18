<?php
session_start();   // Resume the session
session_unset();   // Remove all session variables
session_destroy(); // Completely destroy the session
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logged Out</title>
</head>
<body>
    <h1>Session Ended</h1>
    <p>Your session has been cleared.</p>
    <p><a href="index.php">Go back to start</a></p>
</body>
</html>
