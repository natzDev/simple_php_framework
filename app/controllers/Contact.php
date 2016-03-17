<?php


class Contact extends Controller
{
    function __construct()
    {
        parent::__construct();
        $data = [
            'title' => "Contact",
            'heading' => 'Welcome to the contact page'
        ];
        $this->view->render('pages/Contact', $data);
    }
}