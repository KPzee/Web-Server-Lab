<?php
// led.php - Basic PHP page setup
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LED Control</title>
</head>
<body>
    <h1>Welcome to LED Control Page</h1>
    <p>This is a basic PHP page setup.</p>
    <form method="POST">
    <button name="action" value="Toggle LED" type="submit">Toggle LED</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
        if (isset($_POST["toggle"])) {
            `gpio toggle 0`;
        }
    ?>

</body>
</html>