<?php 

if(!defined('SRCDIR')){


    define('SRCDIR', ABSPATH . 'source/');
}

spl_autoload_register(function($class_name){

    $file .= SRCDIR . 'Classes/'. $class_name;

    if(file_exists($file)){

        require_once $file;
    }
});

