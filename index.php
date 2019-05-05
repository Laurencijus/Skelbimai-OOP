<?php
    session_start();
    define('VIEW', __DIR__.'/view/');
    define('DATA', __DIR__.'/data/');
    define('URL', 'http://localhost/skelbimai1/');


    

//autoloaderis
spl_autoload_register(function ($class) {
    $prefix = '';
    $base_dir = __DIR__ . '/class/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

App::$app = new App;


App::$app->route();



