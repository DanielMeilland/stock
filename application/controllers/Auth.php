<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Auth Class
 *
 * @package     Simple and Lightweight Authentication System
 * @subpackage  CodeIgniter HMVC Module
 * @category    Authentication
 * @author      Jeffrey Mostroso
 * @link        https://github.com/jeffrey-omega
 */
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'auth');
        $this->load->model('user_model', 'user');
        $this->template
            ->set_partial('header', 'partials/auth/header')
            ->set_partial('footer', 'partials/auth/footer')
            ->set_layout('blank');
    }

    /**
     * login function.
     *
     * @access public
     * @return void
     */
    public function login()
    {
        $data = new stdClass();
        $this->form_validation->set_rules($this->auth->validate['auth/login']);
        if ($this->form_validation->run() == false) {
            $this->template->build('auth/login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($this->auth->login($username, $password)) {
                $user_id = $this->user->get_user_id_from_username($username);
                $user = $this->user->get_user($user_id);
                $_SESSION['user_id'] = (int)$user->id;
                $_SESSION['username'] = (string)$user->username;
                $_SESSION['logged_in'] = (bool)true;
                $_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
                $_SESSION['is_admin'] = (bool)$user->is_admin;
                $this->session->set_flashdata('message', 'user login ok');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', 'login failed');
                $this->template->build('auth/login');
            }
        }
    }

    /**
     * logout function.
     *
     * @access public
     * @return void
     */
    public function logout()
    {
        $data = new stdClass();
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
