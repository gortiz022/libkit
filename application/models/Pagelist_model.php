<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Pagelist_model extends CI_Model {
    
    
    public function get_all_pagelists($inst_id){
        //gets projects by user ID
        $this->db->where('inst_id', $inst_id);
        $query = $this->db->get('page_list');
        return $query->result();
        
        
    }//end of get_all_pagelist method
    
    public function create_pagelist($data){
        //creates pagelist and assigns it user ID
        $insert_query = $this->db->insert('page_list', $data);
        return $insert_query;        
    }//end of create_pagelist method
    
    public function get_last_save(){
        $query = $this->db->query("SELECT * FROM page_list ORDER BY id DESC LIMIT 1");
        return $query->row();
    }
    
    public function get_pagelist($id){
        $this->db->where('id' , $id);
        $query = $this->db->get('page_list');
        
        return $query->row();
    }
    
    public function pagelist_with_items($pagelist_id){
            $this->db->select('
            list_items.listitem_title,
            list_items.listitem_author,
            list_items.listitem_url,
            list_items.listitem_img,
            list_items.id as listitem_id,
            page_list.list_name,
            page_list.id as page_list_id,
            page_list.list_description,
            page_list.inst_id
        ');
        
        
        $this->db->from('list_items');
        $this->db->join('page_list','page_list.id = list_items.page_list_id');
        $this->db->where('list_items.page_list_id', $pagelist_id);
        $query = $this->db->get();
        return $query->result();
    }
    
    
    public function delete_pagelist($pagelist_id){
        //deletes the project
        $this->db->where('id', $pagelist_id);
        $this->db->delete('page_list');
        return true;
        
    }//end of delete project model
    
    public function setFeatured($inst_id,$pagelist_id){
        //sets/updates the feautured pagelist for Iframe
        $data = array(
                'featured_pagelist' => $pagelist_id
            );
        $this->db->where('id', $inst_id);
        $this->db->update('institution', $data);
    }//end of setFeatured
    

    
}//end of Pagelist model