<?php

/**
 * Created by PhpStorm.
 * User: jeffreymostroso
 * Date: 29.01.16
 * Time: 00:10
 */
class User_model extends MY_Model
{
    public $_table = 'users';
    public $primary_key = 'id';
    public $validate = [];

    public function __construct()
    {
        parent::__construct();
    }

}