<?php
session_start();

if ($_SESSION["admin"]!== "1"){
    header("Location: list.php");
}
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
                    <a href="list.php">See All Entries</a>
                    <a href="#">Add New Entry</a>
                </div>
            </div>
            <a style="float:right" href="login.html">Login</a>
        </div>

        <div id="title">
            <h1>Publication System</h1>
        </div>
        <h1>Add a new entry:</h1>
        <form method="post" action="display.php" id="submit">
            
            <div>
                <div>
                    <label for="title">Title</label>
                    <input class="control" name="title" autofocus placeholder="Title of entry">
                </div>
                <div>
                    <label for="authors">Authors</label>
                    <input class="control" name="authors" placeholder="Please separate using '/'">
                </div>
                <div>
                    <label for="year">Year</label>
                    <input class="control" name="year" placeholder="Year of release">
                </div>
                <div>
                    <label for="journal">Journal</label>
                    <input class="control" name="journal" placeholder="Where was it released?">
                </div>
                <div>
                    <label for="DOI">Digital Object Identifier</label>
                    <input class="control" name="DOI" placeholder="Enter DOI">
                </div>
                <div>
                    <label for="school">School Name</label>
                    <input class="control" name="school" placeholder="Enter school name">
                </div>
                <div>
                    <button id = "yesno" type="submit" action="list.php">Submit</button>
                </div>
            </div>
        </form>
        <?php
            if($_SESSION["admin"]=="1"){
                $fp = fopen('data.csv', 'a');

                $list = array();

                foreach ($_POST as $i){
                    if($i !== null && $i !== ""){
                        $list[] = $i;
                    }
                    fputcsv(
                        $fp, 
                        $list,
                        $separator = ",",
                        $enclosure = "\"",
                        $escape = "\\",
                        $eol = "\n"
                    );
                }

                fclose($fp);
            }
        ?>
    </body>
</html>