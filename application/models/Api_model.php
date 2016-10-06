<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends MY_Model {
    protected $_table = 'page_list';
    protected $primary_key = 'id';
    protected $return_type = 'array';
    
}//end of API_Model


?>