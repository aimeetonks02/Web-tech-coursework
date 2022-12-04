<?php
$fp = fopen("data.csv", "w");

print_r(fgetcsv($fp));

fclose($fp);

?>