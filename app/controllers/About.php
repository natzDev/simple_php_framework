<?php

class About extends Controller
{
    function __construct()
    {
        parent::__construct();
        $data = [
            'title' => "About",
            'heading' => 'Welcome to the about page'
        ];
        $this->view->render('pages/about', $data);
    }

    public function other($args = false)
    {
        echo "<h2> We are inside other </h2>";
        echo "You passed: $args";
    }
}