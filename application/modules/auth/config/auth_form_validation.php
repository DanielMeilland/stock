<?php
/**
 * Created by PhpStorm.
 * User: MoJe
 * Date: 26.01.2016
 * Time: 15:09
 */

/*
 * Saving Sets of Validation Rules to a Config File
 * In order to organize your rules into "sets" requires that you place them into "sub arrays"
 * Your validation rule file will be loaded automatically and used when you call the run() function.
 * When a rule group is named identically to a controller class/function it will be used automatically when the run() function is invoked from that class/function.
 * !! Please note that you MUST name your array $config. !!
 * http://www.codeigniter.com/user_guide/libraries/form_validation.html?highlight=form_validation
 */

$config = [
    'auth/login' => [
        ['field' => 'identity', 'label' => 'Identity', 'rules' => 'trim|required|min_length[3]|max_length[64]'],
        ['field' => 'password', 'label' => 'Password', 'rules' => 'trim|required|min_length[8]'],
    ],

    'auth/change_password' => [
        ['field' => 'old', 'label' => 'test', 'rules' => 'trim|required'],
        ['field' => 'new', 'label' => 'change_password_validation_new_password_label', 'rules' => 'required|min_length[8]|max_length[20]|matches[new_confirm]'],
        ['field' => 'new_confirm', 'label' => 'change_password_validation_new_password_confirm_label', 'rules' => 'trim|required']
    ],
];