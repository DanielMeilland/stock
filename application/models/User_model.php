<?php defined('BASEPATH') OR exit('No direct script access allowed');

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
    ];

    /**
     * __construct function.
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * hash_password function.
     *
     * @access private
     * @param mixed $password
     * @return string|bool could be a string on success, or bool false on failure
     */
    private function hash_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    /**
     * verify_password_hash function.
     *
     * @access private
     * @param mixed $password
     * @param mixed $hash
     * @return bool
     */
    private function verify_password_hash($password, $hash)
    {
        return password_verify($password, $hash);
    }

}