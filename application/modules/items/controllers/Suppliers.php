<?php

/**
 * Created by PhpStorm.
 * User: MoJe
 * Date: 01.02.2016
 * Time: 14:45
 */
class Suppliers extends CI_Controller
{
    public $data = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->model('item_model', 'item');
        $this->item->skip_validation();
        $this->load->model('supplier_model', 'supplier');
        $this->load->model('stocking_place_model', 'stocking_place');
        $this->load->library("pagination");

        //$this->output->enable_profiler(TRUE);
        $this->template
            ->set_partial('header', 'partials/dashboard/header')
            ->set_partial('navbar', 'partials/dashboard/navbar')
            ->set_partial('footer', 'partials/dashboard/footer')
            ->set_layout('dashboard');
    }

    public function index()
    {
        $this->data['suppliers'] = $this->supplier->get_all();
        //$this->data["links"] = $this->pagination->create_links();
        $this->template->set($this->data)->build('supplier/index');
    }

    /**
     * Show the form for creating a new supplier
     *
     * @return Response
     */
    public function create()
    {
        if ($this->form_validation->run() == false) {
            $this->template->set($this->data)->build('supplier/create');
        } else {
            $this->store();
        }
    }

    /**
     * Store a newly created item in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->data = [
            'name' => $this->input->post('name'),
            'address_line1' => $this->input->post('address_line1'),
            'address_line2' => $this->input->post('address_line2'),
            'zip' => $this->input->post('zip'),
            'city' => $this->input->post('city'),
            'country' => $this->input->post('country'),
            'tel' => $this->input->post('tel'),
            'email' => $this->input->post('email')
        ];
        $this->supplier->insert($this->data);
        redirect('items/suppliers', 'refresh');
    }

    /**
     * Display the specified supplier.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $this->data['supplier'] = $this->supplier->get($id);
        $this->template->set($this->data)->build('supplier/show');
    }

    /**
     * Show the form for editing the specified supplier.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $this->data['supplier'] = $this->supplier->get($id);
        if ($this->form_validation->run() == false) {
            $this->template->set($this->data)->build('supplier/edit');
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
            'name' => $this->input->post('name'),
            'address_line1' => $this->input->post('address_line1'),
            'address_line2' => $this->input->post('address_line2'),
            'zip' => $this->input->post('zip'),
            'city' => $this->input->post('city'),
            'country' => $this->input->post('country'),
            'tel' => $this->input->post('tel'),
            'email' => $this->input->post('email')
        ];
        $this->supplier->update($id, $this->data);
        redirect('items/suppliers', 'refresh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->supplier->delete($id);
        redirect('items/suppliers', 'refresh');
    }
}