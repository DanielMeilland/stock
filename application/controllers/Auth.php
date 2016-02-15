<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Authentication System
 *
 * @package     Authentication
 * @author      Jeffrey Mostroso
 * @author      Didier Viret
 * @link        https://github.com/OrifInformatique/stock
 * @copyright   Copyright (c) 2016, Orif <http://www.orif.ch>
 */

class Auth extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('user_model');
        $this->load->model('user_type_model');

        $this->template
            ->set_partial('header', 'partials/auth/header')
            ->set_partial('footer', 'partials/auth/footer')
            ->set_layout('blank');
    }

    /**
     * Login and create session variables
     *
     * @access public
     * @return void
     */
    public function login()
    {
        $this->form_validation->set_rules($this->user_model->get_validation_rules('auth/login'));
        if ($this->form_validation->run() == false) {
            $this->template->build('auth/login');
        
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->user_model->login($username, $password)) {
                $user = $this->user_model->get_by('username', $username);
                $user_type = $this->user_type_model->get($user->user_type_id);

                $_SESSION['user_id'] = (int)$user->user_id;
                $_SESSION['username'] = (string)$user->username;
                $_SESSION['user_access'] = (int)$user_type->access_level;
                $_SESSION['logged_in'] = (bool)true;
                $this->session->set_flashdata('message', 'user login ok');

                redirect('dashboard');

            } else {
                $this->session->set_flashdata('message', 'login failed');
                $this->template->build('auth/login');
            }
        }
    }

    /**
     * Logout and erase session variables
     *
     * @access public
     * @return void
     */
    public function logout()
    {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }

            redirect('auth/login', 'refresh');
        } else {
            redirect('/');
        }
    }
}