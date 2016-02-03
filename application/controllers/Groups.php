<?php

/**
 * Created by PhpStorm.
 * group: jeffreymostroso
 * Date: 01.02.16
 * Time: 21:01
 */
class Groups extends CI_Controller
{
    public $data = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->model('group_model', 'group');
        $this->template
            ->set_partial('header', 'partials/default/header')
            ->set_partial('navbar', 'partials/default/navbar')
            ->set_partial('footer', 'partials/default/footer');
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
        $this->data["pageName"] = 'Ajouter un group';
        $this->form_validation->set_rules($this->group->validate['groups/create']);
        if ($this->form_validation->run() == false) {
            $this->template->set($this->data)->build('group/create');
        } else {
            $this->store();
        }
    }

    /**
     * Store a newly created group in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->data = ['name' => $this->input->post('name'), 'description' => $this->input->post('description')];
        $this->group->insert($this->data);
        redirect('groups', 'refresh');
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
        $this->form_validation->set_rules($this->group->validate['groups/edit']);
        if ($this->form_validation->run() == false) {
            $this->data['group'] = $this->group->get($id);
            $this->template->set($this->data)->build('group/edit');
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
        $this->data = ['name' => $this->input->post('name'), 'description' => $this->input->post('description')];
        $this->group->update($id, $this->data);
        redirect('groups', 'refresh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public
    function destroy($id)
    {
        $this->group->delete($id);
        redirect('groups', 'refresh');
    }
}