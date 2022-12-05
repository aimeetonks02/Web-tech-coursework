<?php
session_start();

if (($handle = fopen("users.csv", "r")) !== FALSE){
    while (($data = fgetcsv($handle, 100, ",")) !== FALSE){
        $users[$data[0]] = array("password"=>$data[1], "admin"=>$data[2]);
    }
    fclose($handle);
}

$u = $_POST['username'];
$p = $_POST['password'];

if(isset($users[$u]) and $users[$u]['password']==$p){
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['username'] = $u;
    $_SESSION["admin"] = $users[$u]['admin'];
    header("Location: list.php");
}
else{
    header("Location: login.html");
}
?>