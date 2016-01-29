<?php

/**
 * Created by PhpStorm.
 * User: jeffreymostroso
 * Date: 28.01.16
 * Time: 23:53
 */
class Item_model extends MY_Model
{
    public $_table = 'item';
    public $primary_key = 'item_id';
    public $validate = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function suppliers_list()
    {
        $this->db->select('item.item_id, supplier.supplier_id, supplier.name');
        $this->db->from('item');
        $this->db->join('supplier', 'item.item_id = supplier.supplier_id');
        $query = $this->db->get();
        return $query->result();
    }
}