<?php

/**
 * Created by PhpStorm.
 * User: MoJe
 * Date: 02.02.2016
 * Time: 11:30
 */
class User_type_model extends MY_Model
{
    public $_table = 'user_type';
    public $primary_key = 'user_type_id';
    public $validate = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function user_type_list()
    {
        $this->db->select('user_type_id, user_type.name');
        $query = $this->db->get($this->_table);
        $data = array();
        foreach ($query->result() as $row) {
            $data[$row->user_type_id] = $row->name;
        }
        return ($data);
    }
}