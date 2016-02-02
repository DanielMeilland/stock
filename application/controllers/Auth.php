<?php

/**
 * Auth Class
 *
 * @package     Dashboard
 * @subpackage  CodeIgniter HMVC Module
 * @category    Modules
 * @author      Jeffrey Mostroso
 * @link        https://github.com/jeffrey-omega
 */
class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->template
            ->set_partial('header', 'partials/auth/header')
            ->set_partial('footer', 'partials/auth/footer')
            ->set_layout('blank');
    }

    public function index()
    {
        $this->login();
    }

    public function login()
    {
        $this->template->build('auth/login');
    }

    public function logout()
    {

    }

}