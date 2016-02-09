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
    //public $protected_attributes = ['user_id'];
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
     * get_user_id_from_username function.
     *
     * @access public
     * @param mixed $username
     * @return int the user id
     */
    public function get_user_id_from_username($username)
    {
        $this->db->select('user_id');
        $this->db->from('user');
        $this->db->where('username', $username);
        return $this->db->get()->row('user_id');
    }

    /**
     * get_user function.
     *
     * @access public
     * @param mixed $user_id
     * @return object the user object
     */
    public function get_user($user_id)
    {
        $this->db->from('user');
        $this->db->where('user_id', $user_id);
        return $this->db->get()->row();
    }

}