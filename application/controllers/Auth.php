<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Auth Class
 *
 * @package     Items
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
        $this->load->model('auth_model', 'auth');
        $this->load->library('form_validation');
        $this->template
            ->set_partial('header', 'partials/auth/header')
            ->set_partial('footer', 'partials/auth/footer')
            ->set_layout('blank');
    }

    public function logged_in_check()
    {
        if ($this->session->userdata("logged_in")) {
            redirect("items");
        }
    }

    public function index()
    {
        $this->login();
    }

    public function login()
    {
        $this->logged_in_check();
        $this->form_validation->set_rules($this->auth->validate['auth/login']);
        if ($this->form_validation->run() == true) {
            $status = $this->auth->login();
            if ($status == ERR_INVALID_USERNAME) {
                $this->session->set_flashdata("error", "Username is invalid");
            } elseif ($status == ERR_INVALID_PASSWORD) {
                $this->session->set_flashdata("error", "Password is invalid");
            } else {
                $this->session->set_userdata($this->auth->get_data());
                $this->session->set_userdata("logged_in", true);
                redirect("items");
            }
        }
        $this->template->build('auth/login');
    }

    /**
     * logout function.
     *
     * @access public
     * @return void
     */
    public function logout()
    {
        // create the data object
        $data = new stdClass();
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            // remove session datas
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }
            // user logout ok
            $this->session->set_flashdata("message", "logout ok");
            redirect('auth/login', 'refresh');

        } else {
            // there user was not logged in, we cannot logged him out,
            // redirect him to site root
            redirect('auth/login', 'refresh');
        }
    }
}