<?php
$fp = fopen('data.csv', 'a');

$data =$_POST;

fputcsv($fp, $data);

fclose($fp);
?>