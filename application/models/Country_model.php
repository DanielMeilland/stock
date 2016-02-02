<?php

/**
 * Created by PhpStorm.
 * User: jeffreymostroso
 * Date: 01.02.16
 * Time: 19:08
 */
class Country_model extends MY_Model
{
    public $_table = 'country';
    public $primary_key = 'id';
    public $belongs_to = ['supplier'];
    public $validate = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function country_list()
    {
        $this->db->select('id, country.name');
        $query = $this->db->get($this->_table);
        $data = array();
        foreach ($query->result() as $row) {
            $data[$row->id] = $row->name;
        }
        return ($data);
    }
}