<?php

class Controller
{
    function __construct()
    {
        # The base controller initializes the view class
        $this->view = new View();
    }
}
