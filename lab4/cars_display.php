<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Cars Display</title>
</head>
<body>
    <h1>Web Development - Lab 4</h1>
    <h2>Car Records</h2>
    <?php
        require_once("settings.php");
        $conn = @mysqli_connect($host, $user, $pswd, $dbnm) or die("<p>Failed to connect to database.</p>");

        $createSQL = "CREATE TABLE IF NOT EXISTS car (
            car_id INT AUTO_INCREMENT PRIMARY KEY,
            make VARCHAR(40),
            model VARCHAR(40),
            price DECIMAL(10,2),
            year INT
        )";
        mysqli_query($conn, $createSQL);

        $checkResult = mysqli_query($conn, "SELECT COUNT(*) as cnt FROM car");
        $checkRow = mysqli_fetch_assoc($checkResult);
        if ($checkRow['cnt'] == 0) {
            mysqli_query($conn, "INSERT INTO car (make, model, price, year) VALUES
                ('Toyota', 'Camry', 25000.00, 2020),
                ('Honda', 'Civic', 22000.00, 2021),
                ('Ford', 'Mustang', 35000.00, 2022),
                ('BMW', '3 Series', 45000.00, 2021),
                ('Tesla', 'Model 3', 42000.00, 2022)
            ");
        }

        $sql = "SELECT car_id, make, model, price FROM car";
        $result = @mysqli_query($conn, $sql) or die("<p>Query failed.</p>");

        echo "<table border='1'>";
        echo "<tr><th>Car ID</th><th>Make</th><th>Model</th><th>Price</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['car_id'] . "</td>";
            echo "<td>" . $row['make'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>$" . number_format($row['price'], 2) . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_free_result($result);
        mysqli_close($conn);
    ?>
</body>
</html>
