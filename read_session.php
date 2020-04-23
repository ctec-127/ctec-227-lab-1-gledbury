<?php 
    session_start();
    // echo $_SESSION['views'];
    // echo $_SESSION['browser'];
    // echo $_SESSION['role'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read_session</title>
</head>
<body>
    <p><?PHP echo $_SESSION['views']?></p>
    
    <p><?php echo"<br>" . $_SESSION['browser']?></p>
    
    <p><?php echo $_SESSION['role']?></p>
    
    <a href="create_session.php">Go to the Create session page</a>
    <br>
    <a href="destroy_session.php">Go to destroy session page</a>
    <br>
    <a href="destroy_all_session.php">Go to destroy all session page page</a>
</body>
</html>