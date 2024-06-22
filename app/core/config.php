<?php 
define('DB_TYPE','mysql');
define('DB_NAME','gallery_task');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_HOST','127.0.0.1');



$path = str_replace("\\", "/","http://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace("app/core", "public", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));
$url = htmlspecialchars($_SERVER['REQUEST_URI'],ENT_QUOTES,'UTF-8'); //this will give you something like: 'localhost/games/demons-souls/savegame'
$urlParts = explode('/',$url); //then separate string into an array by the forwardslash
$current = $urlParts[count($urlParts)-1];
define('CURRENT', $current);