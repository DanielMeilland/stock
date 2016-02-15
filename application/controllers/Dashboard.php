
<?php

class Dashboard extends MY_Controller
{
    /* MY_Controller variables definition */
    protected $access_level = 1;


    public function __construct()
    {
        parent::__construct();
        $this->template
            ->set_theme('sbadmin2')
            ->set_partial('header', 'partials/header')
            ->set_partial('navigation', 'partials/navigation')
            ->set_partial('footer', 'partials/footer');
    }

    public function index()
    {
        $this->template->build('test');
    }
}