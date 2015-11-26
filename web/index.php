<?php

session_start();

include '../config.php';
include '../lib/vendor/controllerClass.php';
include '../lib/vendor/modelClass.php';
include '../lib/vendor/viewClass.php';

if(isset($_SERVER['PATH_INFO'])){
  $data = explode('/', $_SERVER['PATH_INFO']);
  
}  else {
   $data[0]='/';
   $data[1]='portal';
   $data[2]='index';
}

try {
  $file = DIR . 'controller/' . $data[1] . '/' . $data[2] . '.Class.php';
  if (is_file($file) === false) {
    throw new PDOException('El modulo y accion solicitada no existe');
  } else {
    include $file;
    $controller = $data[2];
    $controller::main();
  }
} catch (PDOException $exc) {
  echo $exc->getMessage();
}
