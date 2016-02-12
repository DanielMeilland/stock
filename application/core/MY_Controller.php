<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author      Didier Viret
 * @link        https://github.com/OrifInformatique/stock
 * @copyright   Copyright (c) 2016, Orif <http://www.orif.ch>
 */

class MY_Controller extends CI_Controller
{

    /**
     * '*' for all users
     * '@' for logged in users
     * '0, 1, 2, 4, 8, ...' for access level (power of 2)
     */
    protected $access_level = "*";

    public function __construct()
    {
        parent::__construct();
        $this->permission_check();
    }

    protected function permission_check()
    {
        if ($this->access_level != "*") {

            // check if user is logged in
            // if not, redirect to login page
            if ($_SESSION['logged_in'] != true) {
                redirect("auth/login");
            }
            // check if page is accessible for all logged in users
            elseif ($this->access_level == "@") {
                return true;
            }
            // check access level
            elseif ($this->access_level <= $_SESSION['user_access']) {
                return true;
            }
            // no access
            else {
                die("<h4>Access denied</h4>");
            }
        }
    }
}