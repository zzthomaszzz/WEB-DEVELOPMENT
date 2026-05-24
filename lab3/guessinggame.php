<?php
    session_start();

    if (!isset($_SESSION["secret"])) {
        $_SESSION["secret"] = rand(0, 100);
        $_SESSION["guesses"] = 0;
    }

    $secret = $_SESSION["secret"];
    $message = "";

    if (isset($_POST["guess"])) {
        $guess = $_POST["guess"];

        if (!is_numeric($guess) || $guess < 0 || $guess > 100) {
            $message = "Please enter a valid number between 0 and 100.";
        } else {
            $_SESSION["guesses"]++;
            $guess = (int)$guess;

            if ($guess < $secret) {
                $message = "Too low! Try higher.";
            } elseif ($guess > $secret) {
                $message = "Too high! Try lower.";
            } else {
                $message = "Congratulations! You guessed the number in " . $_SESSION["guesses"] . " guess(es)!";
            }
        }
    }

    $guessCount = $_SESSION["guesses"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Guessing Game</title>
</head>
<body>
    <h1>Web Development - Lab 3</h1>
    <h2>Guessing Game</h2>
    <p>Guess a number between 0 and 100.</p>
    <p>Number of guesses so far: <?php echo $guessCount; ?></p>

    <?php if ($message !== "") { echo "<p><strong>" . htmlspecialchars($message) . "</strong></p>"; } ?>

    <form action="guessinggame.php" method="post">
        <label>Your guess: <input type="text" name="guess"></label>
        <input type="submit" value="Guess">
    </form>

    <p><a href="giveup.php">Give Up</a></p>
    <p><a href="startover.php">Start Over</a></p>
</body>
</html>
