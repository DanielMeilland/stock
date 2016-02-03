<?php

/**
 * Created by PhpStorm.
 * User: jeffreymostroso
 * Date: 01.02.16
 * Time: 21:10
 */
class Group_model extends MY_Model
{
    public $_table = 'groups';
    public $primary_key = 'id';
    public $validate = [
        'groups/create' => [
            ['field' => 'name', 'label' => 'Name', 'rules' => 'trim|required|min_length[3]|max_length[64]|is_unique[groups.name]'],
            ['field' => 'description', 'label' => 'description', 'rules' => 'trim|min_length[3]|max_length[64]'],
        ],
        'groups/edit' => [
            ['field' => 'name', 'label' => 'Name', 'rules' => 'trim|required|min_length[3]|max_length[64]'],
            ['field' => 'description', 'label' => 'description', 'rules' => 'trim|min_length[3]|max_length[64]'],
        ],
    ];

    public function __construct()
    {
        parent::__construct();
    }
}