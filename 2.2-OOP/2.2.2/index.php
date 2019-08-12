<?php
include 'autoload.php';
include 'config/SystemConfig.php';
$users = new Users();
$a = $users->displaySortedList();



?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <div class = "form-group">
            <h1 class = "h1">Add user</h1>
            <div>
                <div class = "form-group">Name:</div>
                <div class = "form-group"><input type="text" name="name"></div>
            </div>
            <div>
                <div class = "form-group">Password:</div>
                <div class = "form-group"><input type="password" name="password"></div>
            </div> 
            <div>
                <div class = "form-group">Email:</div>
                <div class = "form-group"><input type="email" name="email"></div>
            </div> 
            <div>
                <div class = "form-group">Rate:</div>
                <div class = "form-group"><input type="number" name="rate"></div>
            </div>
            <div>
                <div class = "form-group"><input type="submit" value = "Add user"></div>
            </div>         
        </div>
    </form>
</body>
</html>