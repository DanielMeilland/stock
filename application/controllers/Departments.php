<?php

/**
 * Created by PhpStorm.
 * User: jeffreymostroso
 * Date: 01.02.16
 * Time: 22:36
 */
class Departments extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('department_model', 'department');
        $this->template
        ->set_partial('header', 'partials/default/header')
        ->set_partial('navbar', 'partials/default/navbar')
        ->set_partial('footer', 'partials/default/footer')
        ->set_layout('default');
    }

    /**
     * Display a listing of departments
     *
     * @return Response
     */
    public function index()
    {
        $this->data['departments'] = $this->department->get_all();
        $this->template->set($this->data)->build('department/index');
    }

    /**
     * Show the form for creating a new department
     *
     * @return Response
     */
    public function create()
    {
        $this->template->build('department/create');
    }

    /**
     * Store a newly created department in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->data['name'] = $this->input->post('name');
        $this->post->insert($this->data);
        redirect($this->agent->referrer(), 'refresh');
    }

    /**
     * Display the specified department.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $this->data['department'] = $this->department->get($id);
        $this->template->set($this->data)->build('department/show');
    }

    /**
     * Show the form for editing the specified department.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $this->data['department'] = $this->department->get($id);
        $this->template->set($this->data)->build('department/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $this->department->update($id);
        redirect($this->agent->referrer(), 'refresh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->department->delete($id);
        redirect($this->agent->referrer(), 'refresh');
    }

}