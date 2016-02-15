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
class Stocking_places extends MY_Controller
{
    public $data = [];

    public function __construct()
    {
        parent::__construct();

        $this->load->model('stocking_place_model', 'stocking_place');

        $this->template
            ->set_partial('header', 'partials/default/header')
            ->set_partial('navbar', 'partials/default/navbar')
            ->set_partial('footer', 'partials/default/footer');
    }

    /**
     * Display a listing of stocking_places
     *
     * @return Response
     */
    public function index()
    {
        $this->data["pageName"] = 'stocking_place';
        $this->data['stocking_places'] = $this->stocking_place->get_all();
        $this->template->set($this->data)->build('stocking_place/index');
    }
}