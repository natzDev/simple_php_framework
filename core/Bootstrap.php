<?php

class Bootstrap
{
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        print_r($url);
        echo "<br>";


        if (empty($url[0]))
        {
            require './app/controllers/Home.php';
            $controller = new Home();
            return false;
        }

        # Load controller file
        $file = './app/controllers/' .ucfirst($url[0]). '.php';
        $file_name = ucfirst($url[0]);

        # Load file for use
        if (file_exists($file))
        {
            require $file;

        } else  {
            echo "Errorgfdgfd";
            return false;
        }

        $controller = new $url[0];

        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }
    }
}
