<?php

/**
 * User Class
 *
 * @package     Users
 * @subpackage  CodeIgniter HMVC Module
 * @category    Modules
 * @author      Jeffrey Mostroso
 * @link        https://github.com/jeffrey-omega
 */
class Users extends CI_Controller
{
    public $data = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
        $this->template
            ->set_partial('header', 'partials/dashboard/header')
            ->set_partial('navbar', 'partials/dashboard/navbar')
            ->set_partial('footer', 'partials/dashboard/footer')
            ->set_layout('dashboard');
    }

    /**
     * Display a listing of users
     *
     * @return Response
     */
    public function index()
    {
        $this->data['users'] = $this->user->get_all();
        $this->template->set($this->data)->build('index');
    }

    /**
     * Show the form for creating a new user
     *
     * @return Response
     */
    public function create()
    {
        $this->template->build('create');
    }

    /**
     * Store a newly created user in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->data = [
            'ip_address' => $this->input->post(),
            'username' => $this->input->post(),
            'password' => $this->input->post(),
            'salt' => $this->input->post(),
            'email' => $this->input->post(),
            'activation_code' => $this->input->post(),
            'forgotten_password_code' => $this->input->post(),
            'forgotten_password_time' => $this->input->post(),
            'remember_code' => $this->input->post(),
            'created_on' => $this->input->post(),
            'last_login' => $this->input->post(),
            'active' => $this->input->post(),
            'first_name' => $this->input->post(),
            'last_name' => $this->input->post(),
            'company' => $this->input->post(),
            'phone' => $this->input->post(),
        ];
        $this->post->insert($this->data);
    }

    /**
     * Display the specified user.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $this->data['user'] = $this->user->get($id);
        $this->template->set($this->data)->build('show');
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $this->data['user'] = $this->user->get($id);
        $this->template->set($this->data)->build('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $this->user->update($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->user->delete($id);
    }
}