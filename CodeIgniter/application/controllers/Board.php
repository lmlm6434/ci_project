<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/* 
    web board main controller
*/


class Board extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('board_model');
        $this->load->helper(array('url', 'date')); // redirect 함수 사용용도
    }

    public function index() {
        $this->list();
    }


    public function list() {

        $this->load->library('pagination');


        $config['base_url'] = '/controller/board/list/page';
        $config['total_rows'] = $this->board_model->get_list($this->uri->segment(1), 'count');
        
        //total dount
        $config['per_page'];    

        $data['lists'] = $this->board_model->get_list($this->uri->segment(1));
        $this->load->view('board/list', $data);
    }


}