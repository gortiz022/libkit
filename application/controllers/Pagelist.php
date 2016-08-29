<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagelist extends CI_Controller {


	public function index(){
	    
	    $data['pagelists'] = $this->pagelist_model->get_all_pagelists($this->session->userdata('inst_id'));
        
        $data['main_body'] = 'pagelists/all_pagelists_view';
        
        $this->load->view('main_layouts/main_index_view', $data);
	}
	
	public function create(){
		//creates a new list

        //created a new project
        $this->form_validation->set_rules('pagelist_name', 'Page list Name', 'trim|required');
        $this->form_validation->set_rules('pagelist_date', 'Date', 'trim|required');
        $this->form_validation->set_rules('pagelist_description', 'List Decription', 'trim|required');
        $this->form_validation->set_rules('pagelist_isbn', 'ISBN\'s', 'trim|required');        
    
        if($this->form_validation->run() == FALSE){
            //this loads the view even if the form hasn't been submitted yet
  	    	$data['main_body'] = 'pagelists/create_pagelist_view';
        	$this->load->view('main_layouts/main_index_view', $data);
        }else{
            //Step 1, save the pagelist in the database
            //set up array of data to insert into database
            $data = array(
                    'inst_id'   => $this->session->userdata('inst_id'),
                    'list_name'      => $this->input->post('pagelist_name'),
                    'list_date'      => $this->input->post('pagelist_date'),
                    'list_description'      => $this->input->post('pagelist_description'),
                    'list_isbns'      => $this->input->post('pagelist_isbn')
                );
            
            $pagelist_success = 'Project has been created';
            //$this->pagelist_model->create_pagelist($data)
            
            if($this->pagelist_model->create_pagelist($data)){
                $recent_pagelist = $this->pagelist_model->get_last_save();
                
                $recent_pagelist_id = array('pagelist_id' => $recent_pagelist->id);
                
                
                //Step 2. Perform the API search and return results to be reviewed
                //grab isbn field and insert into variable
                $list_isbns = $this->input->post('pagelist_isbn');
                $items = array();
                $items = explode("\n", $list_isbns);

                $result = array();
                //break up isbns by line
                foreach($items as $item) {
                    
                    if(!$item){
                        continue;
                    }else{
                        //perform amazon api search
                        $item = strval($item);
                        $item = trim($item);
                        $api_array = amazon_query($item);
                        $api_array = array_merge($api_array, $recent_pagelist_id);
                        $result[] = $api_array;
                        //gotta pause it for a second because amazon api sucks
                        
                        sleep(1);
                    }

                }
                $data['api_results'] = $result;

                
                $data['main_body'] = 'pagelist_items/review_pageitems_view';
        
                $this->load->view('main_layouts/main_index_view', $data);
                
            }    
        }
        
	}//end of page_list create method
	
	public function display_pagelist($id){
        $titles = $this->pagelist_model->pagelist_with_items($id);
        
        $data['titles'] = json_decode(json_encode($titles), true);
        
        //$data['main_body'] = 'pagelist_items/test_pagelist_view';
        
        $data['main_body'] = 'pagelist_items/display_pagelist_items_view';
        
        $this->load->view('main_layouts/main_index_view', $data);       
	}
	
	public function delete_pagelist($pagelist_id){
	    if($this->pagelist_model->delete_pagelist($pagelist_id)){
            //$this->session->set_flashdata('project_deleted', $project_deleted);
                   redirect(base_url()."pagelist");
        }
	}
	
	public function preview(){
	    //loads a preview of each list
	    $this->load->view('main_layouts/preview');
	}//end of preview method
	
	
}//end of class