<?php

$images = ['jpg', 'png', 'gif'];

$url = explode('/-/', $_SERVER['REQUEST_URI']);
$format = explode('.', $_SERVER['REQUEST_URI']);
$format = $format[count($format) - 1];

if (isset($url[1])) {
    /**
     * Проверка для отрисовки изображения
     */
    if (in_array($format, $images)) {
        header('Content-Type: image/' . $format);
        header('Content-Length: ' . filesize($url[1]));
    }

    echo file_get_contents($url[1]);
} else {
    return 'Не указан get параметр url';
}
