<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_index extends CI_Controller {
    
    
    
    public function index(){
        
        $data['main_body'] = 'admin/admin_view';
        
        $this->load->view('main_layouts/main_index_view', $data);
        
    }
    
    public function config($inst_id){
                
        //controller for managing config file
        //set up form Validation
        $this->form_validation->set_rules('inst_name', 'Library Name', 'trim|required');
        $this->form_validation->set_rules('inst_username', 'Library Username', 'trim|required');
        $this->form_validation->set_rules('inst_email', 'Library Email', 'trim|required');
        $this->form_validation->set_rules('inst_password', 'Library\'s Password', 'trim|required');        
        //end of institutional data
        $this->form_validation->set_rules('ILS_base_url', 'ILS Base URL', 'trim|required');
        $this->form_validation->set_rules('ILS_closing_url', 'ILS Closing URL', 'trim');
        $this->form_validation->set_rules('google_api_key', 'Google API Key', 'trim|required');
        $this->form_validation->set_rules('default_img', 'Default Image', 'trim|required');
        $this->form_validation->set_rules('amazon_api', 'Amazon API', 'trim|required');
        $this->form_validation->set_rules('amazon_secret', 'Amazon API Key', 'trim|required');
        $this->form_validation->set_rules('oclc_key', 'OCLC API Key', 'trim|required');
        $this->form_validation->set_rules('oclc_api_secret', 'OCLC API Secret', 'trim|required');
        $this->form_validation->set_rules('oclc_inst_code', 'OCLC Institutional Code', 'trim|required');
        $this->form_validation->set_rules('lists_stylesheet', 'Lists CSS Stylesheet', 'trim|required');        
        
        if($this->form_validation->run() == FALSE){
        //add data to form
        $data['inst_data'] = $this->user_model->get_config($inst_id);
        
        //form fails and reload
        $data['main_body'] = 'admin/config_view';
        $this->load->view('main_layouts/main_index_view', $data); 
        }else{
            //IF.. then save to model
            $inst_data = array(
                'institution_name'    => $this->input->post('inst_name'),
                'institution_username'    => $this->input->post('inst_username'),
                'institution_email'    => $this->input->post('inst_email'),
                'institution_password'    => $this->input->post('inst_password'),                
                'google_api_key'    => $this->input->post('google_api_key'),
                'amazon_api_key'    => $this->input->post('amazon_api'),
                'amazon_secret'    => $this->input->post('amazon_secret'),
                'oclc_key'    => $this->input->post('oclc_key'),
                'oclc_api_secret'    => $this->input->post('oclc_api_secret'),
                'oclc_inst_code'    => $this->input->post('oclc_inst_code'),
                'ils_base_url'    => $this->input->post('ILS_base_url'),
                'ils_closing_url'    => $this->input->post('ILS_closing_url'),
                'default_img'    => $this->input->post('default_img'),
                'lists_stylesheet'    => $this->input->post('lists_stylesheet')                
                );
            if($this->user_model->set_config($inst_id, $inst_data)){
                //set session flash message
                //$this->session->set_flashdata('project_edited', 'Institutional data updated');
                redirect('main_index/index');
                
            }    

        }


        
    }//end of config method
    
}