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
        $this->output->enable_profiler(TRUE);
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
        $this->data['items'] = $this->item->get_all();
        $this->data['suppliers'] = $this->item->suppliers_list();
        if (empty($this->data['items'])) {
            show_404();
        }
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
            return $this->template->build('create');
        } else {
            return $this->store();
        }
    }

    /**
     * Store a newly created item in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->item->skip_validation();
        $this->item->insert($this->data);
    }

    /**
     * Display the specified item.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $this->data['item'] = $this->item->get($id);
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
        $this->data['item'] = $this->item->get($id);
        $this->data['suppliers'] = $this->item->suppliers_list();
        if ($this->form_validation->run() == false) {
            $this->template->set($this->data)->build('edit');
        } else {
            $this->update($this->data);
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
        $this->item->update($id);
        redirect('item', 'refresh');
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
        redirect('item', 'refresh');
    }

}