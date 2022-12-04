<?php
    session_unset();
    session_destroy();
    echo("Thank you for visiting")
?>

<!DOCTYPE html>
<html>
    <body>
        <script>
            window.alert("Thank you for visiting");
        </script>
    </body>
</html>

<?php
    header("Location: homepage.html");
    exit("Thank you for visiting");
 ?>