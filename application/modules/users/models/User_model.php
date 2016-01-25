<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: jeffreymostroso
 * Date: 22.01.16
 * Time: 16:25
 */
class User_model extends MY_Model
{

    public $_table = 'users';
    public $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }

}