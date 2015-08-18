<?php

$url = $_SERVER['SCRIPT_NAME'];

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|woff|ttf|php)$/', $url)) {
    return false;
} else {
    $_SERVER['SCRIPT_NAME'] = '/framework/main.php';
    $_SERVER['SCRIPT_FILENAME'] = realpath('framework/main.php');
    $_GET['url'] = $url;
    require_once('framework/main.php');
}

