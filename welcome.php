<?php
// Start the session. Must be the very first thing before any HTML.
session_start();

// Check if form data (username) was sent using POST.
if (isset($_POST['username'])) {
    // Save the username in a session variable.
    $_SESSION['username'] = $_POST['username'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
    <!-- Display the stored username -->
    <h1>Hi, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Your name is now saved in the session.</p>

    <p><a href="page2.php">Go to Page 2</a></p>
</body>
</html>