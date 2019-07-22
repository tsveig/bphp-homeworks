<?php
$users = [
    'admin' => 'admin1234',
    'randomUser' => 'somePassword',
    'janitor' => 'nimbus2000'
];
if(isset($_POST["login"])){
    $login = $_POST["login"];
} else {
    $login = "login";

};
$password = isset($_POST["password"]);
$time = time();

if (((isset($_COOKIE["date"])) && (($time - $_COOKIE["date"]) < 5)) || ((isset($_COOKIE["dateOld"])) && (($time - $_COOKIE["dateOld"])< 180))) {
    echo "Слишком часто вводите пароль. Попробуйте еще раз через минуту"; 
    sleep(60);
} else {
    if (isset($_COOKIE["date"])){
        setcookie("dateOld", $_COOKIE["date"]);
    }
    setcookie("date", time());
    $file = fopen($login, 'a');
    fwrite($file, time());
    fwrite($file, "\n");
    fclose($file);
    
}


?>