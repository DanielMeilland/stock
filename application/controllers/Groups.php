<?php

/**
 * Created by PhpStorm.
 * group: jeffreymostroso
 * Date: 01.02.16
 * Time: 21:01
 */
class Groups extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('group_model', 'group');
        $this->template
            ->set_partial('header', 'partials/default/header')
            ->set_partial('navbar', 'partials/default/navbar')
            ->set_partial('footer', 'partials/default/footer')
            ->set_layout('default');
    }

    /**
     * Display a listing of groups
     *
     * @return Response
     */
    public function index()
    {
        $this->data["pageName"] = 'Groups';
        $this->data['groups'] = $this->group->get_all();
        $this->template->set($this->data)->build('group/index');
    }

    /**
     * Show the form for creating a new group
     *
     * @return Response
     */
    public function create()
    {
        $this->template->build('group/create');
    }

    /**
     * Store a newly created group in storage.
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
     * Display the specified group.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $this->data['group'] = $this->group->get($id);
        $this->template->set($this->data)->build('group/show');
    }

    /**
     * Show the form for editing the specified group.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $this->data['group'] = $this->group->get($id);
        $this->template->set($this->data)->build('group/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $this->group->update($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->group->delete($id);
    }
}