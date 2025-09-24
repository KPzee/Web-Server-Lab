<!DOCTYPE html>
<html>
    <head>
        <title>Form response</title>
    </head>
    <body>
        <p>My Favorite tea brand is <?= htmlspecialchars($_POST['teaBrand']) . " and my miswak thickness is " . htmlspecialchars($_POST['miswakThickness']) ?></p>
    </body>
</html>
