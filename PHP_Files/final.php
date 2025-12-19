<!DOCTYPE html>
<html>
    <head>
        <title>Form response</title>
    </head>
    <?php
            // Retrieve submitted information
            $gQuery = htmlspecialchars($_GET["gQuery"]);
            $ip = $_SERVER["REMOTE_ADDR"];
            $server = "localhost";
            $username = "root";
            $password = "root";
            $database = "Final";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "insert into FinalTable (gQuery, ip) values ('$gQuery', '$ip');";
            $result = mysqli_query($conn, $sql);

            header("Location: https://google.com/search?q=" . $gQuery);
            exit;
    ?>

    <!-- //<body>
     //   <p>My Favorite tea brand is <?= htmlspecialchars($_GET['teaBrand']) . " and my miswak thickness is " . htmlspecialchars($_GET['miswakThickness']) . " and tea should always be made at " . htmlspecialchars($_GET['teaTemp']) ?></p>
     //           <?php
      //          $sql = $sql = "select temp from teaFlavor where temp=75;";
      //          $result = mysqli_query($conn, $sql);
      //          echo "<h3>The correct temperatures</h3>";
      //              foreach($result as $row) 
      //              {
      //                  echo "<p>{$row['temp']}</p>\n";
      //              }
      //          $sql = $sql = "select distinct thick from teaFlavor;";
      //          $result = mysqli_query($conn, $sql);
      //          echo "<h3>The unique thicknesses</h3>";
      //              foreach($result as $row) 
      //              {
      //                  echo "<p>{$row['thick']}</p>\n";
      //              }
      //          $sql = $sql = "select count(*) from teaFlavor;";
      //          $result = mysqli_query($conn, $sql);
      //          echo "<h3>How many inputs</h3>";
      //              foreach($result as $row) 
      //              {
      //                  echo "<p>{$row['count(*)']}</p>\n";
      //              }
      //              // Don't forget to close the connection!
      //              mysqli_close($conn);
      //          ?>

    </body> -->
</html>
