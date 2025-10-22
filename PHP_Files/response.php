<!DOCTYPE html>
<html>
    <head>
        <title>Form response</title>
    </head>
    <?php
            // Retrieve submitted information
            $tea_brand = htmlspecialchars($_GET["teaBrand"]);
            $miswak_thickness = htmlspecialchars($_GET["miswakThickness"]);
            $tea_temp = htmlspecialchars($_GET["teaTemp"]); 
            $server = "localhost";
            $username = "php";
            $password = "password";
            $database = "teaType";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "INSERT INTO teaFlavor (type, thick, temp) VALUES ('$tea_brand', '$miswak_thickness', $tea_temp);";
            $result = mysqli_query($conn, $sql);
    ?>

    <body>
        <p>My Favorite tea brand is <?= htmlspecialchars($_GET['teaBrand']) . " and my miswak thickness is " . htmlspecialchars($_GET['miswakThickness']) . " and tea should always be made at " . htmlspecialchars($_GET['teaTemp']) ?></p>
                <?php
                $sql = $sql = "select temp from teaFlavor where temp=75;";
                $result = mysqli_query($conn, $sql);
                echo "<h1>The correct temperatures</h1>";
                    foreach($result as $row) 
                    {
                        echo "<p>{$row['temp']}</p>\n";
                    }
                $sql = $sql = "select distinct thick from teaFlavor;";
                $result = mysqli_query($conn, $sql);
                echo "<h1>The unique thicknesses</>";
                    foreach($result as $row) 
                    {
                        echo "<li>{$row['thick']}</li>\n";
                    }
                $sql = $sql = "select count(*) from teaFlavor;";
                $result = mysqli_query($conn, $sql);
                echo "<h1>How many inputs</h1>";
                    foreach($result as $row) 
                    {
                        echo "<p>{$row['count(*)']}</p>\n";
                    }
                    // Don't forget to close the connection!
                    mysqli_close($conn);
                ?>

    </body>
</html>
