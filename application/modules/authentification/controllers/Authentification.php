<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Authentification extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('authentification_model', 'authentification');
        $this->load->model('user_model', 'authentification');

        // Load Template
        $this->template
            ->set_partial('header', 'partials/authentification_header')
            ->set_partial('footer', 'partials/authentification_footer')
            ->set_layout('blank');
    }

    public function logged_in_check()
    {
        if ($this->session->userdata("logged_in")) {
            redirect("dashboard");
        }
    }

    /**
     *
     */
    public function index()
    {
        redirect('authentification/login');
    }

    /**
     *
     */
    public function login()
    {
        $this->logged_in_check();
        if ($this->form_validation->run() == true) {
            $status = $this->authentification->validate();
            if ($status == ERR_INVALID_USERNAME) {
                $this->session->set_flashdata('error', 'Username is invalid');
            } elseif ($status == ERR_INVALID_PASSWORD) {
                $this->session->set_flashdata('error', 'Password is invalid');
            } else {
                $this->session->set_userdata($this->authentification->get_data());
                $this->session->set_userdata("logged_in", true);
                redirect("dashboard");
            }
        }
        $this->template->build('login');
    }

    /**
     *
     */
    public function forgot_password(){
        if ($this->form_validation->run() == false){
            $this->template->build('forgot_password');
        }else{
            die('indisponible');
        }
    }

    /**
     * register function.
     *
     * @access public
     * @return void
     */
    public function register()
    {
        $this->logged_in_check();
        if ($this->form_validation->run() == false) {
            // validation not ok, send validation errors to the view
            $this->template->build('registration');
        } else {
            // set variables from the form
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            if ($this->user->create_user($username, $email, $password)) {
                // user creation ok
                $this->session->set_flashdata('message', 'User created !');
                redirect('authentification/registration', 'refresh');
            } else {
                // send error to the view
                $this->session->set_flashdata('message', 'There was a problem creating your new account. Please try again');
                redirect('authentification/registration', 'refresh');
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
            // remove session datas
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }
            // user logout ok
            $this->session->set_flashdata('error', 'Vous êtes maintenant déconnecté !');
            redirect('authentification/login', 'refresh');
        } else {
            // there user was not logged in, we cannot logged him out,
            // redirect him to site root
            redirect('/');
        }

    }

}