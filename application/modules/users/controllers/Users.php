<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: MoJe
 * Date: 08.01.2016
 * Time: 14:00
 */
class Users extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
        $this->template
            ->set_partial('header', 'partials/dashboard_header')
            ->set_partial('navbar', 'partials/dashboard_navbar')
            ->set_partial('footer', 'partials/dashboard_footer')
            ->set_layout('dashboard');
    }

    /**
     * Display a listing of posts
     *
     * @return Response
     */
    public function index()
    {
        $this->data['users'] = $this->user->get_all();
        if (empty($this->data['users'])) {
            show_404();
        }
        $this->template->set($this->data)->build('index');
    }

    /**
     * Show the form for creating a new post
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
     * Store a newly created post in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->user->insert($this->data);
    }

    /**
     * Display the specified post.
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
     * Show the form for editing the specified post.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id = null)
    {
        $this->data['user'] = $this->user->get($id);
        $this->data['suppliers'] = $this->user->suppliers_list();
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
    public function delete($id)
    {
        $this->user->delete($id);
        redirect('item', 'refresh');
    }

}