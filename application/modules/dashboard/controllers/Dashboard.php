<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: jeffreymostroso
 * Date: 17.01.16
 * Time: 18:49
 */
class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->template
            ->set_partial('header', 'partials/dashboard_header')
            ->set_partial('navbar', 'partials/dashboard_navbar')
            ->set_partial('footer', 'partials/dashboard_footer')
            ->set_layout('dashboard');
    }

    public function index()
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            return show_error('You must be an administrator to view this page.');
        }
        $this->template->build('dashboard');
    }

    public function form()
    {
        $this->template->build('form');
    }
}