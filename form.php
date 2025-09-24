<!DOCTYPE html>
<html>
    <head>
        <title>Form response</title>
    </head>
    <body>
        <p>My Favorite tea brand is <?= htmlspecialchars($_POST['teaBrand']) . " " . htmlspecialchars($_POST['miswakThickness']) ?></p>
    </body>
</html>
