<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: jeffreymostroso
 * Date: 17.01.16
 * Time: 18:49
 */
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        if (!$this->session->userdata("logged_in")) {
            redirect('authentification/login');
        }
    }

    public function index()
    {
        $this->template
            ->set_partial('header', 'partials/dashboard_header')
            ->set_partial('navbar', 'partials/dashboard_navbar')
            ->set_partial('footer', 'partials/dashboard_footer')
            ->set_layout('dashboard')
            ->build('dashboard');
    }

    public function form()
    {
        $this->template
            ->set_partial('header', 'partials/dashboard_header')
            ->set_partial('navbar', 'partials/dashboard_navbar')
            ->set_partial('footer', 'partials/dashboard_footer')
            ->set_layout('dashboard')
            ->build('form');
    }
}