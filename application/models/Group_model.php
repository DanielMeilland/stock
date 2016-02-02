<?php

/**
 * Created by PhpStorm.
 * User: jeffreymostroso
 * Date: 01.02.16
 * Time: 21:10
 */
class Group_model extends MY_Model
{
    public $_table = 'groups';
    public $primary_key = 'id';
    public $validate = [];

    public function __construct()
    {
        parent::__construct();
    }
}