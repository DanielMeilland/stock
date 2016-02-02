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

        $this->load->model('user_model', 'user')
            //->model('group_model', 'group')
            ->model('user_type_model', 'user_type')
            ->model('department_model', 'department')
            ->model('user_state_model', 'user_state');

        $this->template
            ->set_partial('header', 'partials/default/header')
            ->set_partial('navbar', 'partials/default/navbar')
            ->set_partial('footer', 'partials/default/footer')
            ->set_layout('default');
    }

    /**
     * Display a listing of users
     *
     * @return Response
     */
    public function index()
    {
        $this->data["pageName"] = 'Users';
        $this->data['users'] = $this->user
            ->with('user_type')
            ->with('department')
            ->with('user_state')
            ->get_all();
        $this->template->set($this->data)->build('user/index');
    }

    /**
     * Show the form for creating a new user
     *
     * @return Response
     */
    public function create()
    {
        $this->form_validation->set_rules($this->user->validate);
        if ($this->form_validation->run() == false) {
            $this->data['user_types'] = $this->user_type->user_type_list();
            $this->data['departments'] = $this->department->department_list();
            $this->data['user_states'] = $this->user_state->user_state_list();
            $this->template->set($this->data)->build('user/create');
        } else {
            $this->store();
        }
    }

    /**
     * Store a newly created user in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->data = [
            'username' => $this->input->post('username'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'created_on' => $this->input->post('created_on') ? $this->input->post('created_on') : date(),
            'company' => $this->input->post('company'),
            'phone' => $this->input->post('phone'),
        ];
        $this->user->insert($this->data);
        redirect('users', 'refresh');
    }

    /**
     * Display the specified user.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $this->data['user'] = $this->user
            ->with('user_type')
            ->with('department')
            ->with('user_state')
            ->get($id);
        $this->template->set($this->data)->build('user/show');
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $this->form_validation->set_rules($this->user->validate);
        if ($this->form_validation->run() == false) {
            $this->data['user'] = $this->user
                ->with('user_type')
                ->with('department')
                ->with('user_state')
                ->get($id);
            $this->data['user_types'] = $this->user_type->user_type_list();
            $this->data['departments'] = $this->department->department_list();
            $this->data['user_states'] = $this->user_state->user_state_list();
            $this->template->set($this->data)->build('user/edit');
        } else {
            $this->update($id);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $this->data = [
            'username' => $this->input->post('username'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'created_on' => $this->input->post('created_on') ? $this->input->post('created_on') : date(),
            'company' => $this->input->post('company'),
            'phone' => $this->input->post('phone'),
        ];
        $this->user->update($id, $this->data);
        redirect('users', 'refresh');
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
        redirect('users', 'refresh');
    }
}