<?php
$data = file_get_contents('DataBaseSys.php');
if ($data !== false) {
    header('Content-Type: text/plain');
    echo $data;
} else {
    header('HTTP/1.1 500 Internal Server Error');
    echo 'Error reading DataBase.php';
}
?>