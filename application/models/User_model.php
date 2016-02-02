<?php

/**
 * Created by PhpStorm.
 * User: jeffreymostroso
 * Date: 29.01.16
 * Time: 00:10
 */
class User_model extends MY_Model
{
    public $_table = 'user';
    public $primary_key = 'user_id';
    public $belongs_to = ['user_type', 'department', 'user_state'];
    public $protected_attributes = ['user_id'];
    public $validate = [
        'users/create' => [
            ['field' => 'username', 'label' => 'Username', 'rules' => 'trim|required|min_length[3]|max_length[64]]'],
            ['field' => 'first_name', 'label' => 'First name', 'rules' => 'trim|min_length[3]|max_length[64]'],
            ['field' => 'last_name', 'label' => 'Last name', 'rules' => 'trim|min_length[3]|max_length[64]'],
            ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required|min_length[8]'],
            ['field' => 'password_confirm', 'label' => 'Confirm Password', 'rules' => 'trim|required|matches[password]'],
            ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|valid_email'],
        ],
        'users/edit' => [
            ['field' => 'username', 'label' => 'Username', 'rules' => 'trim|required|min_length[3]|max_length[64]]'],
            ['field' => 'first_name', 'label' => 'First name', 'rules' => 'trim|min_length[3]|max_length[64]'],
            ['field' => 'last_name', 'label' => 'Last name', 'rules' => 'trim|min_length[3]|max_length[64]'],
            ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|min_length[8]'],
            ['field' => 'password_confirm', 'label' => 'Confirm Password', 'rules' => 'trim|matches[password]'],
            ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|valid_email'],
        ],
    ];

    public function __construct()
    {
        parent::__construct();
    }

}