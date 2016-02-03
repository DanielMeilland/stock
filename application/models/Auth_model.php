<?php

/**
 * Created by PhpStorm.
 * User: jeffreymostroso
 * Date: 29.01.16
 * Time: 00:11
 */
class Auth_model extends MY_Model
{
    public $_table = 'user';
    public $primary_key = 'user_id';
    public $protected_attributes = ['user_id'];
    public $validate = [
        'auth/register' => [
            ['field' => 'username', 'label' => 'Username', 'rules' => 'trim|required|alpha_numeric|min_length[3]|max_length[64]|is_unique[user.username],
        [\'is_unique\' => \'This username already exists. Please choose another one.\']'],
            ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email'],
            ['field' => 'firstname', 'label' => 'First name', 'rules' => 'trim|required|min_length[3]|max_length[64]'],
            ['field' => 'lastname', 'label' => 'Last name', 'rules' => 'trim|required|min_length[3]|max_length[64]'],
            ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required|min_length[8]'],
            ['field' => 'password_confirm', 'label' => 'Confirm Password', 'rules' => 'trim|required|matches[password]']
        ],

        'auth/login' => [
            ['field' => 'username', 'label' => 'Username', 'rules' => 'trim|required|min_length[3]|max_length[64]'],
            ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required|min_length[8]'],
        ],

        'auth/forgot_password' => [
            ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email']
        ],
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {

    }

    public function logout()
    {

    }
}