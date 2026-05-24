<?php
require_once("settings.php");
$conn = @mysqli_connect($host, $user, $pswd, $dbnm) or die(json_encode([]));

$createSQL = "CREATE TABLE IF NOT EXISTS books (
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    authors VARCHAR(200),
    isbn VARCHAR(20),
    price DECIMAL(10,2)
)";
mysqli_query($conn, $createSQL);

$checkResult = mysqli_query($conn, "SELECT COUNT(*) as cnt FROM books");
$checkRow = mysqli_fetch_assoc($checkResult);
if ($checkRow['cnt'] == 0) {
    mysqli_query($conn, "INSERT INTO books (title, authors, isbn, price) VALUES
        ('Beginning ASP.NET with CSharp', 'Hart, Kauffman, Sussman, Ullman', '0764588508', 39.99),
        ('PHP and MySQL Web Development', 'Luke Welling, Laura Thomson', '0672329166', 49.99),
        ('JavaScript: The Good Parts', 'Douglas Crockford', '0596517742', 29.99)
    ");
}

$sql = "SELECT * FROM books";
$result = @mysqli_query($conn, $sql);
$books = [];
while ($row = mysqli_fetch_assoc($result)) {
    $books[] = $row;
}
echo json_encode($books);
mysqli_free_result($result);
mysqli_close($conn);
?>
