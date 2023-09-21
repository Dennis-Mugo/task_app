<?php 



spl_autoload_register(function ($class_name) {
    $class_file = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
    if (file_exists($class_file)) {
        require_once $class_file;
    } else {
        $files = glob(__DIR__ . '/**/*.php');
        foreach ($files as $file) {
            if (strpos($file, $class_name . '.php') !== false) {
                require_once $file;
                break;
            }
        }
    }
});
