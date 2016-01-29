<?php

/**
 * Created by PhpStorm.
 * User: MoJe
 * Date: 29.01.2016
 * Time: 10:27
 */
class Supplier_model extends MY_Model
{
    public $_table = 'supplier';
    public $primary_key = 'supplier_id';
    public $belongs_to = ['item'];
    public $validate = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function suppliers_list()
    {
        $this->db->select('supplier_id, supplier.name');
        $query = $this->db->get($this->_table);
        $data = array();
        foreach ($query->result() as $row) {
            $data[$row->supplier_id] = $row->name;
        }
        return ($data);
    }

}