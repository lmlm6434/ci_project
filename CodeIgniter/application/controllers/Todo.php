<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Todo extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database;
        $this->load->model('todo_model');
        $this->load->helper(array('url', 'date'));
    }



    
}