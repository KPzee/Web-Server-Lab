<!doctype html>
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
</html>