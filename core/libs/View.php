<?php
class View
{
    function __construct()
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }

    public function render($name, $data = false)
    {    
        $loader = new Twig_Loader_Filesystem('app/views');
        $twig = new Twig_Environment($loader);

        $file_path = 'app/views/'.$name.'.php';
        $file_name = $name .'.php';

        if (file_exists($file_path))
        {
            echo $twig->render($file_name, $data);

        } else {
            echo "Error";
        }

    }
}
