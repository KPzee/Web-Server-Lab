<!-- <!doctype html>
<html>
<head><meta charset="UTF-8"><title>LED Control</title></head>
<body>
    <h1>Welcome to LED Control Page</h1>
    <p>This is a basic PHP page setup.</p>
    <form method="POST">
    <button name="action" value="Toggle LED" type="submit">Toggle LED</button>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
       $action = $_POST['action'];
       if ($action === 'Toggle LED') {
           `gpio toggle 0`;
       }
    }
    ?>

</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>BME280 Sensor Readings</title>
</head>
<body>

<h2>BME280 Sensor Readings</h2>

<form method="POST">
    <input type="submit" name="read" value="Read Sensor">
</form>

<?php
if (isset($_POST["read"])) {

    // Run BME280 program
    $raw = `./bme280`;

    // Decode JSON
    $data = json_decode($raw, true);

    // Display values
    echo "<p>Temperature: " . $data["temperature"] . " °C</p>";
    echo "<p>Pressure: " . $data["pressure"] . " hPa</p>";
    echo "<p>Altitude: " . $data["altitude"] . " m</p>";
}
?>

</body>
</html>
