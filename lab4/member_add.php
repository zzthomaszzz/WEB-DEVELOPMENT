<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Add Member</title>
</head>
<body>
    <h1>Web Development - Lab 4</h1>
    <?php
        require_once("settings.php");
        if (isset($_POST["fname"])) {
            $conn = @mysqli_connect($host, $user, $pswd, $dbnm) or die("<p>Failed to connect to database server.</p>");

            $createSQL = "CREATE TABLE IF NOT EXISTS vipmember (
                member_id INT AUTO_INCREMENT PRIMARY KEY,
                fname VARCHAR(40),
                lname VARCHAR(40),
                gender VARCHAR(1),
                email VARCHAR(40),
                phone VARCHAR(20)
            )";
            mysqli_query($conn, $createSQL);

            $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
            $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
            $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $phone = mysqli_real_escape_string($conn, $_POST["phone"]);

            $sql = "INSERT INTO vipmember (fname, lname, gender, email, phone)
                    VALUES ('$fname', '$lname', '$gender', '$email', '$phone')";
            $result = @mysqli_query($conn, $sql);

            if ($result) {
                echo "<p>Member added successfully.</p>";
            } else {
                echo "<p>Failed to add member.</p>";
            }

            mysqli_close($conn);
        } else {
            echo "<p>No data submitted.</p>";
        }
    ?>
    <p><a href="vip_member.php">Back to Home</a></p>
</body>
</html>
