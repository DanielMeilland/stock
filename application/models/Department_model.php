<?php

/**
 * Created by PhpStorm.
 * User: jeffreymostroso
 * Date: 01.02.16
 * Time: 21:10
 */
class Department_model extends MY_Model
{
    public $_table = 'department';
    public $primary_key = 'department_id';
    public $validate = [

    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function department_list()
    {
        $this->db->select('department_id, department.name');
        $query = $this->db->get($this->_table);
        $data = array();
        foreach ($query->result() as $row) {
            $data[$row->department_id] = $row->name;
        }
        return ($data);
    }
}