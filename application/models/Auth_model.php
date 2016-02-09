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
    public $primary_key = 'user_id';
    public $protected_attributes = ['user_id'];
    public $validate = [
        'auth/login' => [
            ['field' => 'username', 'label' => 'username', 'rules' => 'trim|required|min_length[3]|max_length[64]'],
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

    /**
     * login function.
     *
     * @access public
     * @param mixed $username
     * @param mixed $password
     * @return bool true on success, false on failure
     */
    public function login($username, $password)
    {
        $this->db->select('password');
        $this->db->from('user');
        $this->db->where('username', $username);
        $hash = $this->db->get()->row('password');
        return $this->verify_password_hash($password, $hash);
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