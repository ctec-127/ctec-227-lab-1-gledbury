<?php 
    session_start();

    if (isset($_SESSION['views'])) {
        $_SESSION['views'] = $_SESSION['views'] + 1;
    }   else {
        $_SESSION['views'] = 0;
    }
    if (!isset($_SESSION['browser'])) {
        $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    }
    if (!isset($_SESSION['role'])) {
        $_SESSION['role'] = 'admin';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Session Page</title>
</head>
<body>
    <p><?php echo $_SESSION['views'] ?></p>
    
    <p><?php echo "<br>" . $_SESSION['browser'] ?></p>
    
    <p><?php echo $_SESSION['role']?></p>
    
    <a href="read_session.php">Go to the read_session page</a>
    <br><br>
    <a href="destroy_session.php">Go to the destroy_session page</a>
    <br><br>
    <a href="destroy_all_session.php">Go to the destroy_all_session page</a>
</body>
</html>