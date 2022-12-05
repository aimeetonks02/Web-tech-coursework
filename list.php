<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Web Tech Coursework</title>
        <link rel ="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="navbar">
            <a href="homepage.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">CV</button>
                <div class="dropdown-content">
                    <a href="cv.html#modules">Modules</a>
                    <a href="cv.html#summer">Summer Programming Work</a>
                    <a href="cv.html#third">Third Year Project</a>
                </div>
            </div>
            <a href="weather.html">Weather Data</a>
            <div class="dropdown">
                <button class="dropbtn">Processing</button>
                <div class="dropdown-content">
                    <a href="#">See All Entries</a>
                    <a href="submit.php">Add New Entry</a>
                </div>
            </div>
            <a style="float:right" href="login.html">Login</a>
        </div>
        <div class="container">
            <h1>All Database Entries</h1>
        </div>
        <?php
            echo "<html><body><center><table>\n\n";

            $fp = fopen("data.csv", "r");

            while (($data = fgetcsv($fp)) !== false){
                echo "<tr>";
                foreach ($data as $i){
                    echo "<td>" . htmlspecialchars($i) . "</td>";
                }
                echo "</tr> \n";
            }

            fclose($fp);
            echo "\n</table></center></body></html>";
        ?>
    </body>
</html>