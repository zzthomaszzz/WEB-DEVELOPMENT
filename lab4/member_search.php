<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Search Member</title>
</head>
<body>
    <h1>Web Development - Lab 4</h1>
    <h2>Search VIP Member</h2>
    <form action="member_search.php" method="post">
        <label>Last Name: <input type="text" name="lname"></label>
        <input type="submit" value="Search">
    </form>
    <?php
        require_once("settings.php");
        if (isset($_POST["lname"])) {
            $conn = @mysqli_connect($host, $user, $pswd, $dbnm) or die("<p>Failed to connect to database.</p>");

            $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
            $sql = "SELECT member_id, fname, lname, email FROM vipmember WHERE lname = '$lname'";
            $result = @mysqli_query($conn, $sql) or die("<p>Query failed.</p>");

            $num = mysqli_num_rows($result);
            if ($num > 0) {
                echo "<table border='1'>";
                echo "<tr><th>Member ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['member_id'] . "</td>";
                    echo "<td>" . $row['fname'] . "</td>";
                    echo "<td>" . $row['lname'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No members found with last name: " . htmlspecialchars($_POST["lname"]) . "</p>";
            }

            mysqli_free_result($result);
            mysqli_close($conn);
        }
    ?>
    <p><a href="vip_member.php">Back to Home</a></p>
</body>
</html>
