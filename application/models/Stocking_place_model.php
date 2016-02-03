<?php

/**
 * Created by PhpStorm.
 * User: MoJe
 * Date: 29.01.2016
 * Time: 10:54
 */
class Stocking_place_model extends MY_Model
{
    public $_table = 'stocking_place';
    public $primary_key = 'stocking_place_id';
    public $belongs_to = 'item';
    public $validate = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function stocking_place_list()
    {
        $this->db->select('stocking_place_id, stocking_place.name');
        $query = $this->db->get($this->_table);
        $data = array();
        foreach ($query->result() as $row) {
            $data[$row->stocking_place_id] = $row->name;
        }
        return ($data);
    }
}