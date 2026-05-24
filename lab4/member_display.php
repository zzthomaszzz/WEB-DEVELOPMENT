<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Display Members</title>
</head>
<body>
    <h1>Web Development - Lab 4</h1>
    <h2>All VIP Members</h2>
    <?php
        require_once("settings.php");
        $conn = @mysqli_connect($host, $user, $pswd, $dbnm) or die("<p>Failed to connect to database.</p>");

        $sql = "SELECT member_id, fname, lname FROM vipmember";
        $result = @mysqli_query($conn, $sql) or die("<p>Query failed. Please add a member first.</p>");

        echo "<table border='1'>";
        echo "<tr><th>Member ID</th><th>First Name</th><th>Last Name</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['member_id'] . "</td>";
            echo "<td>" . $row['fname'] . "</td>";
            echo "<td>" . $row['lname'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_free_result($result);
        mysqli_close($conn);
    ?>
    <p><a href="vip_member.php">Back to Home</a></p>
</body>
</html>
