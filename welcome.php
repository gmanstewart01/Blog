<?php
session_start();

// Save username if form submitted via POST
if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
    <h1>Hi, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Your name is now saved in the session.</p>

    <p><a href="page2.php">Go to Page 2</a></p>
</body>
</html>
