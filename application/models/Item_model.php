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
    public $belongs_to = ['supplier', 'stocking_place', 'item_state'];

    public $validate = [
        ['field' => 'name', 'label' => 'Name', 'rules' => 'trim|required|min_length[3]|max_length[64]']
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function record_count()
    {
        return $this->db->count_all($this->_table);
    }

    public function pagination($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->_table);

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

}