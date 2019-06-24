<form enctype="multipart/form-data" action="index.php" method="POST">
    <h1 style="color:red; font-size:25px;">Upload a Picture:</h1>
    <p>File formate should be (jpg,png,gif)</p>
    <input name="userfile" type="file"/>
    <input type="submit" value="Upload"/>
</form>

<?php
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
$directory = preg_replace('/\/[a-z0-9-_\.]+\.php$/i', '/', $_SERVER['REQUEST_URI']);
define('TASK_DOMAIN', $protocol . $_SERVER['SERVER_NAME'] . $directory);
define('TASK_PATH', __DIR__ . '/');
)

if ($_FILES['userfile']['error'] === 0 && 
   ($_FILES['userfile']['type'] === 'image/jpeg' || 
   $_FILES['userfile']['type'] === 'image/png' || 
   $_FILES['userfile']['type'] === 'image/gif')) {
    $file = $_FILES['userfile']['tmp_name'];
    $name = $_FILES['userfile']['name'];
    move_uploaded_file($file, 'TASK_PATH' . '\\' . $name);
}
$files = scandir('TASK_PATH');
foreach ($files as $file) {
    if ($file === '.' || $file === '..') {
        continue;
    }
    if (substr($file, -4) === '.jpg' || substr($file, -4) === '.png' || substr($file, -4) === '.gif'){
    	echo "<img src=\"$file\" alt=\"some pic\" style=\"display: block; width: 500px\"><br>";
	}
}
