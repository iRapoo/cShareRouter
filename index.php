<?php

$url = explode('/-/', $_SERVER['REQUEST_URI']);

if (isset($url[1])) {
    echo file_get_contents($url[1]);
} else {
    echo 'Не указан get параметр url';
}
