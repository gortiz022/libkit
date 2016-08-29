<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller {
    
    public function save_items(){
        //take all items and insert into array, then parse array and combine each item with it's corresponding data
        $titles = $this->input->post('title');
        $authors = $this->input->post('author');
        $urls = $this->input->post('url');
        $imgs = $this->input->post('img');
        $pagelist_id = $this->input->post('pagelist_id');
        $parsed_item = array();
        for($i=0; $i<count($titles); $i++){
            $new_array = array(
                    'listitem_title'    =>  $titles[$i], 
                    'listitem_author'   =>  $authors[$i],
                    'listitem_url'      =>  $urls[$i],    
                    'listitem_img'      =>  $imgs[$i],
                    'inst_id'           =>  $this->session->userdata('inst_id'),
                    'page_list_id'      =>  $pagelist_id[$i]                    
                    );

            array_push($parsed_item, $new_array);
        }
        
        foreach($parsed_item as $item){
            $this->item_model->set_items($item);
        }
        
        redirect(base_url()."pagelist/display_pagelist/".$pagelist_id[0]);
        
        // $data['titles'] = $parsed_item;
        
        // $data['main_body'] = 'pagelist_items/display_pagelist_items_view';
        
        // $this->load->view('main_layouts/main_index_view', $data);
 
        //save the data in a method by looping through arrays
    }//end of save_items method
    
    public function test(){
        $result = $this->pagelist_model->get_last_save();
        
        $data['result'] = $result;
        
        $data['main_body'] = 'pagelist_items/edit_pageitem_view';
        
        $this->load->view('main_layouts/main_index_view', $data);
    }
    
    
    
    
}//end of Items Controller