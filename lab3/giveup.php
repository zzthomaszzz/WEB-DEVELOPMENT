<?php
    session_start();
    $secret = isset($_SESSION["secret"]) ? $_SESSION["secret"] : "unknown";
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Give Up</title>
</head>
<body>
    <h1>Web Development - Lab 3</h1>
    <p>The number was: <strong><?php echo $secret; ?></strong></p>
    <p><a href="startover.php">Play Again</a></p>
</body>
</html>
