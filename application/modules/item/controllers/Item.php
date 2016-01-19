<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Controller
{
    public $data = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->model('item_model', 'item');
    }

    public function index()
    {
        $this->data['items'] = $this->item->get_all();

        $this->template
            ->set_partial('header', 'partials/dashboard_header')
            ->set_partial('navbar', 'partials/dashboard_navbar')
            ->set_partial('footer', 'partials/dashboard_footer')
            ->set_layout('dashboard')
            ->set($this->data)
            ->build('list');
    }

    public function add()
    {
        if ($this->form_validation->run() == false) {
            $this->template
                ->set_partial('header', 'partials/dashboard_header')
                ->set_partial('navbar', 'partials/dashboard_navbar')
                ->set_partial('footer', 'partials/dashboard_footer')
                ->set_layout('dashboard')
                ->build('add');
        } else {
            $this->item->insert($this->data);
        }
    }

    public function read($item_id = null)
    {
        $this->data['item'] = $this->item->get($item_id);

        $this->template
            ->set_partial('header', 'partials/dashboard_header')
            ->set_partial('navbar', 'partials/dashboard_navbar')
            ->set_partial('footer', 'partials/dashboard_footer')
            ->set_layout('dashboard')
            ->set($this->data)
            ->build('read');
    }

    public function edit($item_id = null)
    {
        $this->data['item'] = $this->item->get($item_id);

        if ($this->form_validation->run() == false) {
            $this->template
                ->set_partial('header', 'partials/dashboard_header')
                ->set_partial('navbar', 'partials/dashboard_navbar')
                ->set_partial('footer', 'partials/dashboard_footer')
                ->set_layout('dashboard')
                ->set($this->data)
                ->build('edit');
        } else {
            $this->item->update($this->data);
        }
    }

    public
    function delete($id)
    {
        $this->item->delete($id);
    }
}