<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class User_model extends CI_Model {

// Insert registration data in database
public function registration_insert($data) {

    // Query to check whether username already exist or not
    $condition = "user_name =" . "'" . $data['user_name'] . "'";
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();
    
    if ($query->num_rows() == 0) {
        // Query to insert data in database
        $this->db->insert('users', $data);
        if ($this->db->affected_rows() > 0) {
        return true;
        }
    } else {
    return false;
    }
}//end of registration insert

    public function login_user($inst_username, $inst_password){
        
        //set conditional statement with more than one where methods
        // must match
        $this->db->where('institution_username', $inst_username);
        
        //store results from query in result
        $result = $this->db->get('institution');
        
        $db_password =$result->row()->institution_password;
        
        if($inst_password == $db_password){
            //checkt to see if a row is returned and grab ID
            return $result->result();
        }else{
            return false;
        }
    }//end of login_user
    

    public function get_config($inst_id){
        //get the institutional data for API's
        $this->db->where('id', $inst_id);
        $query = $this->db->get('institution');
        return $query->row();
    }//end of get_config method
    
    public function set_config($inst_id, $inst_data){
        //model that sets the config values for APIs
        $this->db->where('id', $inst_id);
        $results = $this->db->update('institution', $inst_data);
        return true;
        
        
    }//end of set_config method

}//end of user_model