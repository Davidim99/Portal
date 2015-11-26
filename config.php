<?php
/**
 * Direccion fisica del proyecto en el servidor
 */
define("DIR", "C:/xampp/htdocs/portal3/");
/**
 * Direccion Web
 */
define("URL", "http://localhost/portal3/web/");

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('PORT', 3306);
define('DBNAME', '123');
define('DRIVER', 'mysql');

define("DSN", DRIVER . ':host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME);

define("MODULO_DEFAULT", "portal");
define("ACCION_DEFAULT", "index");