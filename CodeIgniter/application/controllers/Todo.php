<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Todo extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database;
        $this->load->model('todo_model');
        $this->load->helper(array('url', 'date'));
    }


    public function lists() {
        $data['list'] = $this -> todo_model -> get_list();
        
        
        $this->load->view('todo/list', $data); 

    }


    
}