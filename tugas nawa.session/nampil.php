<?php
session_start();

if(isset($_REQUEST['submit'])){
    $_SESSION["username"] = $_REQUEST['username'];
    $_SESSION["ID"] = $_REQUEST['ID'];

    Header("Location:cobasession2.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Nawa</title>
</head>
<style>
    button{
        color: black;
        background: pink;
    }
</style>
<body>
<form action="">
    <div>username:<input type="text" name="username"></div>
    <div>ID:<input type="number" name="ID"></div>
    <button name="submit">proses</button> 
</form> 
</body>
</html>