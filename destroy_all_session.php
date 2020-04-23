<?php 
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destroy all session page</title>
</head>
<body>
    <a href="create_session.php">Go to the create session page</a>
    <br>
    <a href="read_session.php">Go to the read session page</a>
    <br>
    <a href="destroy_session.php">Go to the destroy session page</a>
</body>
</html>