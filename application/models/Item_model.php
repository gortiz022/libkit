<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {
    
    public function set_items($data){
        //saves item to database
        $query = $this->db->insert('list_items', $data);
        return $query;
    }//end of set item model

}
?>