<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Api extends REST_Controller {
	function __construct() {
		parent::__construct();
	}
	
	function student_get() {
		// $test = 'another test';
		// json_encode($test);
		// echo $test;
		ob_end_clean(); 
		$this->response('this is a new test');
		die('');
	}

	
	function pagelist_get() {
		//grab the id from the uri segment
		$pagelist_id = $this->uri->segment(3);
		
		$pagelist = $this->api_model->get_by(array('id' => $pagelist_id));
		if(isset($pagelist['id'])){
			 ob_end_clean(); 
			$this->response(array('status' => 'success', 'message'=> $pagelist));
			ob_end_clean(); 
		}else{
			ob_end_clean(); 
			$this->response(array('status' => 'failure', 'message' => 'The specified student could not be found' ), REST_Controller::HTTP_NOT_FOUND);
		}

	}//end of pagelist_get
	
	function institution_get(){
		$inst_id = $this->uri->segment(3);
		$institution = $this->user_model->get_config($inst_id);
		if(isset($institution)){
			ob_end_clean(); 
			$this->response(array('status' => 'success', 'message'=> $institution));
			ob_end_clean(); 
		}else{
			$this->response(array('status' => 'failure', 'message' => 'The specified student could not be found' ), REST_Controller::HTTP_NOT_FOUND);
		}

		
	}//end of institution_get
	
	function featuredslideshow_get(){
		//calls the featured slideshow data in JSON format
		$inst_id = $this->uri->segment(3);
		
		//locate featured pagelist ID
		$inst_data = $this->user_model->get_config($inst_id);
	
		//set pagelist ID
	    $featured_id = $inst_data->featured_pagelist;
	    
	    //Find and search for featured items by pagelist ID
	    $titles = $this->pagelist_model->pagelist_with_items($featured_id);
	    
	    $titles = array_values($titles);
		json_encode($titles);
	    
		if(isset($titles)){
			ob_end_clean(); 			
			$this->response(array('status' => 'success', 'message'=> $titles));
			ob_end_clean(); 			
		}else{
			$this->response(array('status' => 'failure', 'message' => 'The specified student could not be found' ), REST_Controller::HTTP_NOT_FOUND);
		}
	}//end of featured slideshow

}

?>