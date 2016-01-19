<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* ********************************************************************************************
 * Item_model : Model to interact with the stock database
 *
 *
 *
 *********************************************************************************************/

// Deactivate sql error feedback :
// In application/config/database.php set
// $db['default']['db_debug'] = FALSE;


class Item_model extends MY_Model
{
    public $_table = 'item';
    public $primary_key = 'item_id';

    public function __construct()
    {
        parent::__construct();
    }

    public function suppliers_list()
    {
        $this->db->select('item_id, item.name, supplier.name');
        $this->db->from($this->_table);
        $this->db->join('supplier', 'supplier.supplier_id = item.supplier_id');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $list[] = $row;
            }
        }
        return $list;
    }


}