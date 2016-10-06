<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User_login extends CI_Controller {

    public function __construct() {
        parent::__construct();

    }//end of constructor

    // Show login page
    public function index() {
        $this->load->view('login/login_form_view');
    }

    // Show registration page
        public function user_registration_show() {
    $this->load->view('login/registration_form_view');
    }

    // Validate and store registration data in database
    public function new_user_registration() {
    
        // Check validation for user input in SignUp form
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $data['main_body'] = 'login/registration_form_view';
            $this->load->view('main_layouts/main_index_view', $data); 
        } else {
            $data = array(
                    'user_name' => $this->input->post('username'),
                    'user_email' => $this->input->post('email_value'),
                    'user_password' => $this->input->post('password')
                );
            
            $result = $this->user_model->registration_insert($data);
            if ($result == TRUE) {
                $data['message_display'] = 'Registration Successfully !';
                $this->load->view('login_form', $data);
            } else {
                $data['message_display'] = 'Username already exist!';
                $this->load->view('login/login_form_view', $data);
            }
        }
    }//end of new)user_registration

    // Check for user login process
    public function login() {
        $this->form_validation->set_rules('institution_username', 'Username', 'trim|required');
        $this->form_validation->set_rules('institution_password', 'Password', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){
                $this->load->view('admin/admin_view');
            }else{
                $this->load->view('login/login_form_view');
            }
        } else {
            
            $username = $this->input->post('institution_username');
            $password = $this->input->post('institution_password');
            
            $result = $this->user_model->login_user($username, $password);
            if ($result == TRUE) {
            
                //$username = $this->input->post('institution_username');
                //$result = $this->user_model->read_user_information($username);
                if ($result != false) {
                $session_data = array(
                'inst_id' => $result[0]->id, 
                'inst_name' => $result[0]->institution_name,
                'username' => $result[0]->institution_username,
                'email' => $result[0]->institution_email,
                'google_api_key' => $result[0]->google_api_key,                
                'amazon_api_key' => $result[0]->amazon_api_key,
                'amazon_secret' => $result[0]->amazon_secret,
                'amazon_associateTag' => $result[0]->amazon_associateTag,
                'ils_base_url' => $result[0]->ils_base_url,
                'ils_closing_url' => $result[0]->ils_closing_url,
                'default_img' => $result[0]->default_img,                
                'logged_in' => true
                //'logged_in' => true
                );
                    // Add user data in session
                    $this->session->set_userdata($session_data);
                    //$this->session->set_userdata($session_data);
                    //$lib_data = print_r($result);
                    
                    $lib_data = $this->session->userdata('inst_name');
                    
                    $welcome_message = 'Hi librarian from '. $lib_data . ". Let's get to work";
                    //set flash data
                    $this->session->set_flashdata('welcome_message', $welcome_message);
                    
                    //publish admin page
                    $data['main_body'] = 'admin/admin_view';
                    $this->load->view('main_layouts/main_index_view', $data);
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                    );
                $this->load->view('login/login_form_view', $data);
            }
        }        

    }//end of user login process

    // Logout from admin page
    public function logout() {
        
        // Removing session data
        // $sess_array = array(
        // 'username' => ''
        // );
        // $this->session->unset_userdata('logged_in', $sess_array);
        //this is all it takes to log out
        $this->session->sess_destroy();
        //redirect('user_login');
        $this->load->view('login/login_form_view');
        // $data['message_display'] = 'Successfully Logout';
        // $this->load->view('login_form', $data);
    }

}

?>