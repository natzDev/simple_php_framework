<?php


class Home extends Controller
{
    function __construct()
    {
        parent::__construct();
        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $data = [
            'title' => "Home",
            'heading' => 'Welcome to the home page',
            'ip_address' => gethostbyname($hostname),
            'host_name' => gethostbyaddr(gethostbyname($hostname))
        ];
        $this->view->render('pages/Home', $data);
    }
}
