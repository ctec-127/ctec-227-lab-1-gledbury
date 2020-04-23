<?php
    session_start();
    unset($_SESSION['views']);
    unset($_SESSION['browser']);
    unset($_SESSION['role']);

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destroy session page</title>
</head>
<body>
    <p>This page demonstrates that we unset the session variables.</p>
    <p>When you return to the read session page you will get Undefined index errors because all the session variables were unset or destroyed.</p>
    <p>The create session page has been viewed <?PHP echo $_SESSION['views']?> times. <strong>We get the Undefined index error because we unset or "destroyed" the session variable.</strong></p>
    <p>The browser version being used is: <?php echo"<br>" . $_SESSION['browser']?><strong>We get the Undefined index error because we unset or "destroyed" the session variable.</strong></p>
    <p>The users assigned role is <?php echo $_SESSION['role']?><strong>We get the Undefined index error because we unset or "destroyed" the session variable.</strong></p>
    <a href="create_session.php">Go to the create session page</a>
    <br>
    <a href="read_session.php">Go to the read session page</a>
    <br>
    <a href="destroy_all_session.php">Go to the destroy all session page</a>
</body>
</html>