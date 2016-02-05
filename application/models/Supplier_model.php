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
    public $belongs_to = ['item', 'country'];
    public $validate = [
        'suppliers/create' => [
            ['field' => 'name', 'label' => 'Name', 'rules' => 'trim|required'],
            ['field' => 'address_line1', 'label' => 'address_line1', 'rules' => 'trim'],
            ['field' => 'address_line2', 'label' => 'address_line2', 'rules' => 'trim'],
            ['field' => 'zip', 'label' => 'zip', 'rules' => 'trim'],
            ['field' => 'city', 'label' => 'city', 'rules' => 'trim'],
            ['field' => 'country_id', 'label' => 'country_id', 'rules' => 'trim'],
            ['field' => 'tel', 'label' => 'tel', 'rules' => 'trim'],
            ['field' => 'email', 'label' => 'email', 'rules' => 'trim|valid_email']
        ],
        'suppliers/edit' => [
            ['field' => 'name', 'label' => 'Name', 'rules' => 'trim|required'],
            ['field' => 'address_line1', 'label' => 'address_line1', 'rules' => 'trim'],
            ['field' => 'address_line2', 'label' => 'address_line2', 'rules' => 'trim'],
            ['field' => 'zip', 'label' => 'zip', 'rules' => 'trim'],
            ['field' => 'city', 'label' => 'city', 'rules' => 'trim'],
            ['field' => 'country_id', 'label' => 'country_id', 'rules' => 'trim'],
            ['field' => 'tel', 'label' => 'tel', 'rules' => 'trim'],
            ['field' => 'email', 'label' => 'email', 'rules' => 'trim|valid_email']
        ]
    ];

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