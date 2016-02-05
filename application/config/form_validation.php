<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Saving Sets of Validation Rules to a Config File
 * In order to organize your rules into "sets" requires that you place them into "sub arrays"
 * Your validation rule file will be loaded automatically and used when you call the run() function.
 * When a rule group is named identically to a controller class/function it will be used automatically when the run() function is invoked from that class/function.
 * !! Please note that you MUST name your array $config. !!
 * https://ellislab.com/codeigniter/user-guide/libraries/form_validation.html
 */

$config = [
    'email' => [
        ['field' => 'email', 'label' => 'Email', 'rules' => 'required|valid_email'],
        ['field' => 'name', 'label' => 'Name', 'rules' => 'required|alpha'],
        ['field' => 'title', 'label' => 'Title', 'rules' => 'required'],
        ['field' => 'message', 'label' => 'MessageBody', 'rules' => 'required']
    ]
];
