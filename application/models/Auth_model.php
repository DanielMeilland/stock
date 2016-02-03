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
    private $_data = [];
    private $username;
    private $password;
    public $primary_key = 'user_id';
    public $protected_attributes = ['user_id'];
    public $validate = [
        'auth/login' => [
            ['field' => 'identity', 'label' => 'identity', 'rules' => 'trim|required|alpha_numeric|min_length[3]|max_length[64]'],
            ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required|min_length[8]'],
        ]
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

    public function login()
    {
        $this->username = $this->input->post('identity');
        $this->password = $this->input->post('password');
        $this->db->where("username", $this->username);
        $query = $this->db->get($this->_table);
        if ($query->num_rows()) {
            $row = $query->row_array();
            if (password_verify($this->password, $row['password'])) {
                unset($row['password']);
                $this->_data = $row;
                return ERR_NONE;
            }
            return ERR_INVALID_PASSWORD;
        } else {
            return ERR_INVALID_USERNAME;
        }
    }

    public function get_data()
    {
        return $this->_data;
    }
}