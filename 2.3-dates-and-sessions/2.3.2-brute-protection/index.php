<?php
$users = [
    'admin' => 'admin1234',
    'randomUser' => 'somePassword',
    'janitor' => 'nimbus2000'
];
$login = isset($_POST["login"]);
$password = isset($_POST["password"]);
$time = time();

if (((isset($_COOKIE["date"]) && (($time - $_COOKIE["date"]) < 5)) || ((isset($_COOKIE["date"]) && (($time - $_COOKIE["dateOld"]) < 180))){
    echo "Слишком часто вводите пароль. Попробуйте еще раз через минуту"; 
    disableButton();
} else {
    if (isset($_COOKIE["date"]){
        setcookie("dateOld", $_COOKIE["date"]);
    }
    setcookie("date", time());
    $file = fopen("${login}", 'a');
    fwrite($file, time() + "\n");
    fclose($file);
    
}

function disableButton(){
    sleep(60);
}
?>