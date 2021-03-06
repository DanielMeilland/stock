<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * A controller to display and manage items
 *
 * @author      Didier Viret
 * @link        https://github.com/OrifInformatique/stock
 * @copyright   Copyright (c) 2016, Orif <http://www.orif.ch>
 */

/*
Menu:
34 index
*/

class Item extends MY_Controller {

    /* MY_Controller variables definition */
    protected $access_level = "*";


    /**
    * Constructor
    */
	public function __construct()
	{
			parent::__construct();
			$this->load->model('item_model');
            $this->load->model('loan_model');
	}

	/**
    * Display items list
    */
	public function index()
    {
        $output['title'] = $this->lang->line('page_item_list');
        $output['items'] = $this->item_model->with('created_by_user')
                                            ->get_all();

        $this->display_view('item/list', $output);
    }

	/**
    * Display details of one single item
    *
    * @param $id : the item to display
    */
	public function view($id = NULL)
	{
		if (empty($id))
		{
            // No item specified, display items list
			redirect('/item');
		}

        // Get item object and related objects
        $item = $this->item_model->with('supplier')
                                 ->with('stocking_place')
                                 ->with('item_condition')
                                 ->with('item_group')
                                 ->get($id);

		$output['item'] = $item;

		$this->display_view('item/detail', $output);
	}

  // Add a new object
	public function create()
    {
      //Test if input

      //Load the options
  		$this->load->model('stocking_place_model');
  		$data['stocking_places'] = $this->stocking_place_model->get_all();
  		$this->load->model('supplier_model');
  		$data['suppliers'] = $this->supplier_model->get_all();
  		$this->load->model('item_group_model');
  		$data['item_groups'] = $this->item_group_model->get_all();

  		//Load the tags
  		$this->load->model('item_tag_model');

  		$data['item_tags'] = $this->item_tag_model->get_all();
  		//Get the ID that the new item will receive if it is created now
  		$data['future_id'] = $this->item_model->get_future_id();

  		$this->display_view('item/form', $data);
    }

    /**
    * Display loans list for one given item
    *
    * @param $id : the item concerned
    */
    public function loans($id = NULL)
    {
        if (empty($id))
        {
            // No item specified, display items list
            redirect('/item');
        }

        // Get item object and related loans
        $item = $this->item_model->get($id);
        $loans = $this->loan_model->with('loan_by_user')
                                  ->with('loan_to_user')
                                  ->get_many_by('item_id', $item->item_id);

        $output['item'] = $item;
        $output['loans'] = $loans;

        $this->display_view('item/loans', $output);
    }

	public function modify($id)
	{
    $uiae;
	}

	public function delete($id)
	{
		$data['db'] = 'item';
		$data['id'] = $id;

		$this->display_view('item/confirm_delete', $data);
	}

	public function delete_loan($id)
	{
		$data['db'] = 'loan';
		$data['id'] = $id;

		$this->display_view('item/confirm_delete', $data);
	}


}
