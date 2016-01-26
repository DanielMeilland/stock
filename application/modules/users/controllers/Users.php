<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: MoJe
 * Date: 08.01.2016
 * Time: 14:00
 */
class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->lang->load(['auth']);
        $this->template
            ->set_partial('header', 'partials/dashboard_header')
            ->set_partial('navbar', 'partials/dashboard_navbar')
            ->set_partial('footer', 'partials/dashboard_footer')
            ->set_layout('dashboard');
    }

    /**
     * Display a listing of posts
     *
     * @return Response
     */
    public function index()
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the home page because they must be an administrator to view this
            return show_error('You must be an administrator to view this page.');
        } else {
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            //list the users
            $this->data['users'] = $this->ion_auth->users()->result();
            foreach ($this->data['users'] as $k => $user) {
                $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
            }
            $this->template->set($this->data)->build('users/index');
        }
    }

    // activate the user
    function activate($id, $code = false)
    {
        if ($code !== false) {
            $activation = $this->ion_auth->activate($id, $code);
        } else if ($this->ion_auth->is_admin()) {
            $activation = $this->ion_auth->activate($id);
        }

        if ($activation) {
            // redirect them to the auth page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect("users", 'refresh');
        } else {
            // redirect them to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("auth/forgot_password", 'refresh');
        }
    }

    // deactivate the user
    function deactivate($id = NULL)
    {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            // redirect them to the home page because they must be an administrator to view this
            return show_error('You must be an administrator to view this page.');
        }

        $id = (int)$id;

        $this->form_validation->set_rules('confirm', $this->lang->line('deactivate_validation_confirm_label'), 'required');
        $this->form_validation->set_rules('id', $this->lang->line('deactivate_validation_user_id_label'), 'required|alpha_numeric');

        if ($this->form_validation->run() == FALSE) {
            // insert csrf check
            $this->data['csrf'] = $this->_get_csrf_nonce();
            $this->data['user'] = $this->ion_auth->user($id)->row();

            $this->template->set($this->data)->build('users/deactivate_user');

        } else {
            // do we really want to deactivate?
            if ($this->input->post('confirm') == 'yes') {
                // do we have a valid request?
                if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id')) {
                    show_error($this->lang->line('error_csrf'));
                }

                // do we have the right userlevel?
                if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin()) {
                    $this->ion_auth->deactivate($id);
                }
            }

            // redirect them back to the users page
            redirect('users', 'refresh');
        }
    }

    // create a new user
    function create_user()
    {
        $this->data['title'] = "Create User";

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            redirect('auth', 'refresh');
        }

        $tables = $this->config->item('tables', 'ion_auth');
        $identity_column = $this->config->item('identity', 'ion_auth');
        $this->data['identity_column'] = $identity_column;

        // validate form input
        $this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'required');
        $this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'required');
        if ($identity_column !== 'email') {
            $this->form_validation->set_rules('identity', $this->lang->line('create_user_validation_identity_label'), 'required|is_unique[' . $tables['users'] . '.' . $identity_column . ']');
            $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email');
        } else {
            $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique[' . $tables['users'] . '.email]');
        }
        $this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'trim');
        $this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'trim');
        $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

        if ($this->form_validation->run() == true) {
            $email = strtolower($this->input->post('email'));
            $identity = ($identity_column === 'email') ? $email : $this->input->post('identity');
            $password = $this->input->post('password');

            $additional_data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone'),
            ];
        }
        if ($this->form_validation->run() == true && $this->ion_auth->register($identity, $password, $email, $additional_data)) {
            // check to see if we are creating the user
            // redirect them back to the admin page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect("users", 'refresh');
        } else {
            // display the create user form
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->data['first_name'] = ['class' => 'form-control', 'name' => 'first_name', 'id' => 'first_name',
                'value' => $this->form_validation->set_value('first_name'),
            ];
            $this->data['last_name'] = array('class' => 'form-control', 'name' => 'last_name', 'id' => 'last_name',
                'value' => $this->form_validation->set_value('last_name'),
            );
            $this->data['identity'] = ['class' => 'form-control', 'name' => 'identity', 'id' => 'identity',
                'value' => $this->form_validation->set_value('identity'),
            ];
            $this->data['email'] = ['class' => 'form-control', 'name' => 'email', 'id' => 'email',
                'value' => $this->form_validation->set_value('email'),
            ];
            $this->data['company'] = ['class' => 'form-control', 'name' => 'company', 'id' => 'company',
                'value' => $this->form_validation->set_value('company'),
            ];
            $this->data['phone'] = array('class' => 'form-control', 'name' => 'phone', 'id' => 'phone',
                'value' => $this->form_validation->set_value('phone'),
            );
            $this->data['password'] = array('class' => 'form-control', 'name' => 'password', 'id' => 'password',
                'value' => $this->form_validation->set_value('password'),
            );
            $this->data['password_confirm'] = array('class' => 'form-control', 'name' => 'password_confirm', 'id' => 'password_confirm',
                'value' => $this->form_validation->set_value('password_confirm'),
            );
            $this->template->set($this->data)->build('users/create_user');
        }
    }

    // edit a user
    function edit_user($id)
    {
        $this->data['title'] = "Edit User";

        if (!$this->ion_auth->logged_in() || (!$this->ion_auth->is_admin() && !($this->ion_auth->user()->row()->id == $id))) {
            redirect('auth', 'refresh');
        }

        $user = $this->ion_auth->user($id)->row();
        $groups = $this->ion_auth->groups()->result_array();
        $currentGroups = $this->ion_auth->get_users_groups($id)->result();

        // validate form input
        $this->form_validation->set_rules('first_name', $this->lang->line('edit_user_validation_fname_label'), 'required');
        $this->form_validation->set_rules('last_name', $this->lang->line('edit_user_validation_lname_label'), 'required');
        $this->form_validation->set_rules('phone', $this->lang->line('edit_user_validation_phone_label'), 'required');
        $this->form_validation->set_rules('company', $this->lang->line('edit_user_validation_company_label'), 'required');

        if (isset($_POST) && !empty($_POST)) {
            // do we have a valid request?
            if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id')) {
                show_error($this->lang->line('error_csrf'));
            }

            // update the password if it was posted
            if ($this->input->post('password')) {
                $this->form_validation->set_rules('password', $this->lang->line('edit_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
                $this->form_validation->set_rules('password_confirm', $this->lang->line('edit_user_validation_password_confirm_label'), 'required');
            }

            if ($this->form_validation->run() === TRUE) {
                $data = array(
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'company' => $this->input->post('company'),
                    'phone' => $this->input->post('phone'),
                );

                // update the password if it was posted
                if ($this->input->post('password')) {
                    $data['password'] = $this->input->post('password');
                }


                // Only allow updating groups if user is admin
                if ($this->ion_auth->is_admin()) {
                    //Update the groups user belongs to
                    $groupData = $this->input->post('groups');
                    if (isset($groupData) && !empty($groupData)) {
                        $this->ion_auth->remove_from_group('', $id);
                        foreach ($groupData as $grp) {
                            $this->ion_auth->add_to_group($grp, $id);
                        }
                    }
                }

                // check to see if we are updating the user
                if ($this->ion_auth->update($user->id, $data)) {
                    // redirect them back to the admin page if admin, or to the base url if non admin
                    $this->session->set_flashdata('message', $this->ion_auth->messages());
                    if ($this->ion_auth->is_admin()) {
                        redirect('users', 'refresh');
                    } else {
                        redirect('/', 'refresh');
                    }

                } else {
                    // redirect them back to the admin page if admin, or to the base url if non admin
                    $this->session->set_flashdata('message', $this->ion_auth->errors());
                    if ($this->ion_auth->is_admin()) {
                        redirect('users', 'refresh');
                    } else {
                        redirect('/', 'refresh');
                    }
                }

            }
        }

        // display the edit user form
        $this->data['csrf'] = $this->_get_csrf_nonce();

        // set the flash data error message if there is one
        $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

        // pass the user to the view
        $this->data['user'] = $user;
        $this->data['groups'] = $groups;
        $this->data['currentGroups'] = $currentGroups;
        $this->data['first_name'] = ['class' => 'form-control', 'name' => 'first_name', 'id' => 'first_name',
            'value' => $this->form_validation->set_value('first_name', $user->first_name),
        ];
        $this->data['last_name'] = ['class' => 'form-control', 'name' => 'last_name', 'id' => 'last_name',
            'value' => $this->form_validation->set_value('last_name', $user->last_name),
        ];
        $this->data['company'] = ['class' => 'form-control', 'name' => 'company', 'id' => 'company',
            'value' => $this->form_validation->set_value('company', $user->company),
        ];
        $this->data['phone'] = ['class' => 'form-control', 'name' => 'phone', 'id' => 'phone', 'type' => 'text',
            'value' => $this->form_validation->set_value('phone', $user->phone),
        ];
        $this->data['password'] = ['class' => 'form-control', 'name' => 'password', 'id' => 'password'];
        $this->data['password_confirm'] = ['class' => 'form-control', 'name' => 'password_confirm', 'id' => 'password_confirm'];
        $this->template->set($this->data)->build('users/edit_user');
    }

    // create a new group
    function create_group()
    {
        $this->data['title'] = $this->lang->line('create_group_title');

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            redirect('auth', 'refresh');
        }

        // validate form input
        $this->form_validation->set_rules('group_name', $this->lang->line('create_group_validation_name_label'), 'required|alpha_dash');

        if ($this->form_validation->run() == TRUE) {
            $new_group_id = $this->ion_auth->create_group($this->input->post('group_name'), $this->input->post('description'));
            if ($new_group_id) {
                // check to see if we are creating the group
                // redirect them back to the admin page
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect("users", 'refresh');
            }
        } else {
            // display the create group form
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->data['group_name'] = ['class' => 'form-control', 'name' => 'group_name', 'id' => 'group_name',
                'value' => $this->form_validation->set_value('group_name'),
            ];
            $this->data['description'] = ['class' => 'form-control', 'name' => 'description', 'id' => 'description',
                'value' => $this->form_validation->set_value('description'),
            ];
            $this->template->set($this->data)->build('users/create_group');
        }
    }

    // edit a group
    function edit_group($id)
    {
        // bail if no group id given
        if (!$id || empty($id)) {
            redirect('users', 'refresh');
        }
        $this->data['title'] = $this->lang->line('edit_group_title');
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            redirect('auth', 'refresh');
        }

        $group = $this->ion_auth->group($id)->row();

        // validate form input
        $this->form_validation->set_rules('group_name', $this->lang->line('edit_group_validation_name_label'), 'required|alpha_dash');

        if (isset($_POST) && !empty($_POST)) {
            if ($this->form_validation->run() === TRUE) {
                $group_update = $this->ion_auth->update_group($id, $_POST['group_name'], $_POST['group_description']);

                if ($group_update) {
                    $this->session->set_flashdata('message', $this->lang->line('edit_group_saved'));
                } else {
                    $this->session->set_flashdata('message', $this->ion_auth->errors());
                }
                redirect("auth", 'refresh');
            }
        }

        // set the flash data error message if there is one
        $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

        // pass the user to the view
        $this->data['group'] = $group;
        $readonly = $this->config->item('admin_group', 'ion_auth') === $group->name ? 'readonly' : '';
        $this->data['group_name'] = ['class' => 'form-control', 'name' => 'group_name', 'id' => 'group_name',
            'value' => $this->form_validation->set_value('group_name', $group->name), $readonly => $readonly,
        ];
        $this->data['group_description'] = ['class' => 'form-control', 'name' => 'group_description', 'id' => 'group_description',
            'value' => $this->form_validation->set_value('group_description', $group->description),
        ];
        $this->template->set($this->data)->build('users/edit_group');
    }

    function _get_csrf_nonce()
    {
        $this->load->helper('string');
        $key = random_string('alnum', 8);
        $value = random_string('alnum', 20);
        $this->session->set_flashdata('csrfkey', $key);
        $this->session->set_flashdata('csrfvalue', $value);

        return array($key => $value);
    }

    function _valid_csrf_nonce()
    {
        if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE &&
            $this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue')
        ) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}