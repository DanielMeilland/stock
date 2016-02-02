<?php

/**
 * Created by PhpStorm.
 * User: MoJe
 * Date: 02.02.2016
 * Time: 11:31
 */
class User_state_model extends MY_Model
{
    public $_table = 'user_state';
    public $primary_key = 'user_state_id';
    public $validate = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function user_state_list()
    {
        $this->db->select('user_state_id, user_state.name');
        $query = $this->db->get($this->_table);
        $data = array();
        foreach ($query->result() as $row) {
            $data[$row->user_state_id] = $row->name;
        }
        return ($data);
    }
}