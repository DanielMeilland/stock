<?php

/**
 * Items Class
 *
 * @package     Items
 * @subpackage  CodeIgniter HMVC Module
 * @category    Modules
 * @author      Jeffrey Mostroso
 * @link        https://github.com/jeffrey-omega
 */
class Items extends CI_Controller
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

    /**
     * Display a listing of items
     *
     * @return Response
     */
    public function index()
    {
        $config = [];
        $config["base_url"] = base_url() . "items/index";
        $config["total_rows"] = $this->item->record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $this->data["items"] = $this->item
            ->with('supplier')
            ->with('stocking_place')
            ->limit($config["per_page"], $page)
            ->get_all();
        $this->data['stocking_places'] = $this->stocking_place->stocking_place_list();
        $this->data['suppliers'] = $this->supplier->suppliers_list();
        $this->data["links"] = $this->pagination->create_links();
        $this->template->set($this->data)->build('index');
    }

    /**
     * Show the form for creating a new item
     *
     * @return Response
     */
    public function create()
    {
        if ($this->form_validation->run() == false) {
            $this->template->build('create');
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
            'description' => $this->input->post('description'),
            'supplier_id' => $this->input->post('supplier_id'),
            'supplier_ref' => $this->input->post('supplier_ref'),
            'buying_price' => $this->input->post('buying_price'),
            'buying_date' => $this->input->post('buying_date'),
            'warranty_duration' => $this->input->post('warranty_duration'),
            'file_number' => $this->input->post('file_number'),
            'serial_number' => $this->input->post('serial_number'),
            'remarks' => $this->input->post('remarks'),
            'image' => $this->input->post('image'),
            'created_by_user_id' => $this->input->post('created_by_user_id'),
            'created_date' => $this->input->post('created_date'),
            'modified_by_user_id' => $this->input->post('modified_by_user_id'),
            'modified_date' => $this->input->post('modified_date'),
            'control_by_user_id' => $this->input->post('control_by_user_id'),
            'control_date' => $this->input->post('control_date'),
            'stocking_place_id' => $this->input->post('stocking_place_id'),
            'item_state_id' => $this->input->post('item_state_id'),
        ];
        $this->item->insert($this->data);
        redirect('items', 'refresh');
    }

    /**
     * Display the specified item.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $this->data['item'] = $this->item
            ->with('supplier')
            ->with('stocking_place')
            ->get($id);
        $this->template->set($this->data)->build('show');
    }

    /**
     * Show the form for editing the specified item.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $this->data['item'] = $this->item
            ->with('supplier')
            ->with('stocking_place')
            ->get($id);

        $this->data['stocking_places'] = $this->stocking_place->stocking_place_list();
        $this->data['suppliers'] = $this->supplier->suppliers_list();
        if ($this->form_validation->run() == false) {
            $this->template->set($this->data)->build('edit');
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
            'description' => $this->input->post('description'),
            'supplier_id' => $this->input->post('supplier_id'),
            'supplier_ref' => $this->input->post('supplier_ref'),
            'buying_price' => $this->input->post('buying_price'),
            'buying_date' => $this->input->post('buying_date'),
            'warranty_duration' => $this->input->post('warranty_duration'),
            'file_number' => $this->input->post('file_number'),
            'serial_number' => $this->input->post('serial_number'),
            'remarks' => $this->input->post('remarks'),
            'image' => $this->input->post('image'),
            'created_by_user_id' => $this->input->post('created_by_user_id'),
            'created_date' => $this->input->post('created_date'),
            'modified_by_user_id' => $this->input->post('modified_by_user_id'),
            'modified_date' => $this->input->post('modified_date'),
            'control_by_user_id' => $this->input->post('control_by_user_id'),
            'control_date' => $this->input->post('control_date'),
            'stocking_place_id' => $this->input->post('stocking_place_id'),
            'item_state_id' => $this->input->post('item_state_id'),
        ];
        $this->item->update($id, $this->data);
        redirect('items', 'refresh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->item->delete($id);
        redirect('items', 'refresh');
    }

}