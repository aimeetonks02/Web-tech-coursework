<?php
$fp = fopen('data.csv', 'a');

$list = $_POST;

fputcsv(
    $fp, 
    $list,
    $separator = ",",
    $enclosure = "\"",
    $escape = "\\",
    $eol = "\n"
);

fclose($fp);
?>