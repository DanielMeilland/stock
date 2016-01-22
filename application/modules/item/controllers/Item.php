<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// https://github.com/JeffreyWay/Laravel-4-Generators

class Item extends CI_Controller
{
    public $data = []; //comment

    public function __construct()
    {
        parent::__construct();
        $this->load->model('item_model', 'item');
        $this->output->enable_profiler(TRUE);
    }

    /**
     * Display a listing of posts
     *
     * @return Response
     */
    public function index()
    {
        $this->data['items'] = $this->item->get_all();

        return $this->template
            ->set_partial('header', 'partials/dashboard_header')
            ->set_partial('navbar', 'partials/dashboard_navbar')
            ->set_partial('footer', 'partials/dashboard_footer')
            ->set_layout('dashboard')->set($this->data)->build('index');
    }

    /**
     * Show the form for creating a new post
     *
     * @return Response
     */
    public function create()
    {
        if ($this->form_validation->run() == false) {
            return $this->template
                ->set_partial('header', 'partials/dashboard_header')
                ->set_partial('navbar', 'partials/dashboard_navbar')
                ->set_partial('footer', 'partials/dashboard_footer')
                ->set_layout('dashboard')->build('create');
        } else {
            return $this->store();
        }
    }

    /**
     * Store a newly created post in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->item->skip_validation();
        $this->item->insert($this->data);
    }

    public function read($id = null)
    {
        $this->data['item'] = $this->item->get($id);

        $this->template
            ->set_partial('header', 'partials/dashboard_header')
            ->set_partial('navbar', 'partials/dashboard_navbar')
            ->set_partial('footer', 'partials/dashboard_footer')
            ->set_layout('dashboard')->set($this->data)->build('show');
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id = null)
    {
        $this->data['item'] = $this->item->get($id);
        $this->data['suppliers'] = $this->item->suppliers_list();

        if ($this->form_validation->run() == false) {
            $this->template
                ->set_partial('header', 'partials/dashboard_header')
                ->set_partial('navbar', 'partials/dashboard_navbar')
                ->set_partial('footer', 'partials/dashboard_footer')
                ->set_layout('dashboard')->set($this->data)->build('edit');
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
    public function delete($id)
    {
        $this->item->delete($id);
        redirect('item', 'refresh');
    }
}