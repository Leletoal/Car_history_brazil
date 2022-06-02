<?php
 $print = function($class){
     if(file_exists('projeto/'.$class.'.php')){
         include_once('projeto/'.$class.'.php');

     };

 };
 spl_autoload_register($print);
 define('HOST', 'localhost');
 define('DATABASE','form_cadastro');
 define('USER', 'root');
 define('PASSWORD','');
?>