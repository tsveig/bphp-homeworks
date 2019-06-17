<?php
/**
 * Функция получает текущее количество просмотров на видео
 *
 * @return int
 */
function getViews(): int
{
    $views = include 'views.php';
    return (int)$views;
}
/**
 * Функция увеличивает количество просмотров на 1
 *
 * @param int $views
 */
function incrementViews(int $views)
{
    $views++;
    $data = "<?php \r\nreturn {$views};";
    file_put_contents('views.php', $data);
}
/**
 * Функция проверяет, нужно ли увеличивать число просмотров
 *
 * @return bool
 */
function shouldBeIncremented(): bool
{
    $views = getViews();
	if (!isset($_COOKIE['time'])) {
        addTimeToCookie();
        incrementViews($views);
	}
	$startTime = time();
	$timestamp = $_COOKIE['time'];
    if ($startTime - $timestamp >= 300) {
        incrementViews($views);
        addTimeToCookie();
        return true;
    } else {
    	return false;
	}
}
function addTimeToCookie() {
    setcookie('time', time());
}
shouldBeIncremented();
//
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Tube</title>
</head>
<header style="width:100%; border-bottom: 1px solid black">
    <b>YOUR TUBE</b>
</header>
<body>
<div style="width: 69%; border-right: 1px solid black; display: inline-block">
    <div style="text-align: center; border: 1px solid black; background-color: black; color: white; height: 39.375%">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        Очень интересное видео
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <div style="margin-top: 2px; border-top: 1px solid black;">
        <b>Просмотров: <?= getViews() ?> </b>
    </div>
</div>
<div style="width: 29%; display: inline-block; margin-bottom: 100%">
    <div style="text-align: center; border: 1px solid black; background-color: black; color: white; height: 39.375%; margin:1px">
        <br>
        <br>
        Очень интересное видео
        <br>
        <br>
    </div>
    <div style="text-align: center; border: 1px solid black; background-color: black; color: white; height: 39.375%; margin:1px">
        <br>
        <br>
        Очень интересное видео
        <br>
        <br>
    </div>
    <div style="text-align: center; border: 1px solid black; background-color: black; color: white; height: 39.375%; margin:1px">
        <br>
        <br>
        Очень интересное видео
        <br>
        <br>
    </div>
    <div style="text-align: center; border: 1px solid black; background-color: black; color: white; height: 39.375%; margin:1px">
        <br>
        <br>
        Очень интересное видео
        <br>
        <br>
    </div>

</div>

</body>
</html>
