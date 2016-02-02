<?php

/**
 * Created by PhpStorm.
 * User: MoJe
 * Date: 02.02.2016
 * Time: 08:37
 */
class Item_state_model extends MY_Model
{
    public $_table = 'item_state';
    public $primary_key = 'item_state_id';
    public $belongs_to = ['supplier', 'stocking_place'];
    public $validate = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function item_state_list()
    {
        $this->db->select('item_state_id, item_state.name');
        $query = $this->db->get($this->_table);
        $data = array();
        foreach ($query->result() as $row) {
            $data[$row->item_state_id] = $row->name;
        }
        return ($data);
    }
}