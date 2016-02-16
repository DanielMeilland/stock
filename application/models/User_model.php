<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author      Jeffrey Mostroso
 * @author      Didier Viret
 * @link        https://github.com/OrifInformatique/stock
 * @copyright   Copyright (c) 2016, Orif <http://www.orif.ch>
 */

class User_model extends MY_Model
{
    /* MY_Model variables definition */
    protected $_table = 'user';
    protected $primary_key = 'user_id';
    protected $belongs_to = ['user_type', 'department', 'user_state'];
    protected $protected_attributes = ['user_id'];
    protected $validate = [
        'users/create' => [
            ['field' => 'username', 'label' => 'Username', 'rules' => 'trim|required|alpha_numeric|min_length[3]|max_length[64]|is_unique[user.username]',],
            ['field' => 'first_name', 'label' => 'First name', 'rules' => 'trim|min_length[3]|max_length[64]'],
            ['field' => 'last_name', 'label' => 'Last name', 'rules' => 'trim|min_length[3]|max_length[64]'],
            ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email|is_unique[user.email]'],
            ['field' => 'email_confirm', 'label' => 'Confirm Email', 'rules' => 'trim|required|valid_email|matches[email]'],
            ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required|min_length[8]'],
            ['field' => 'password_confirm', 'label' => 'Confirm Password', 'rules' => 'trim|required|matches[password]'],
        ],
        'users/edit' => [
            ['field' => 'username', 'label' => 'Username', 'rules' => 'trim|required|alpha_numeric|min_length[3]|max_length[64]'],
            ['field' => 'first_name', 'label' => 'First name', 'rules' => 'trim|min_length[3]|max_length[64]'],
            ['field' => 'last_name', 'label' => 'Last name', 'rules' => 'trim|min_length[3]|max_length[64]'],
            ['field' => 'email', 'label' => 'Email', 'rules' => 'trim|valid_email'],
            ['field' => 'email_confirm', 'label' => 'Confirm Email', 'rules' => 'trim|valid_email|matches[email]'],
            ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|min_length[8]'],
            ['field' => 'password_confirm', 'label' => 'Confirm Password', 'rules' => 'trim|matches[password]'],
        ],
        'auth/login' => [
            ['field' => 'username', 'label' => 'username', 'rules' => 'trim|required|min_length[3]|max_length[64]'],
            ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required|min_length[8]'],
        ]
    ];

    /**
     * Constructor
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Check username and password for login
     *
     * @access public
     * @param $username
     * @param $password
     * @return bool true on success, false on failure
     */
    public function login($username, $password)
    {
        $user = $this->get_by('username', $username);
        return password_verify($password, $user->password);
    }
}