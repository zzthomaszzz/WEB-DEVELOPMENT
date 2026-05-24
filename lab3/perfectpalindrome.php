<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Perfect Palindrome Checker</title>
</head>
<body>
    <h1>Web Development - Lab 3</h1>
    <?php
        if (isset($_POST["phrase"])) {
            $str = $_POST["phrase"];
            $lower = strtolower($str);
            $reversed = strrev($lower);
            if (strcmp($lower, $reversed) == 0) {
                echo "<p>\"", $str, "\" is a perfect palindrome.</p>";
            } else {
                echo "<p>\"", $str, "\" is NOT a perfect palindrome.</p>";
            }
        } else {
            echo "<p>Please enter a phrase from the input form.</p>";
        }
    ?>
</body>
</html>
