<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Todo extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('todo_model');
        $this->load->helper(array('url', 'date')); // redirect 함수 사용용도
    }

    public function list() {
        $this->load->model('todo_model');
        
        $data['lists'] = $this -> todo_model -> get_list(); // 모델에서 get list 함수 호출후 $data['list'] 로 뷰에 전달
        
        $this->load->view('Todo/list', $data); // 리스트에 데이터 전달 

    }

    public function get()  {
        
        $id = $this ->uri->segment(3);

        $data['gets'] = $this -> todo_model -> get($id);

        $this -> load -> view('Todo/get', $data);

    } 

    public function write() {

        if($_POST) {

            $content = $this -> input->post('content', TRUE);


            $this-> todo_model -> insert($content);

            redirect('https://labo.rentracks.local/Todo/list/');

            exit;
        }
        else {
            $this -> load -> view('/todo/write');
        }
    }




    public function delete() {

        $id = $this -> uri -> segment(3);

        $this -> todo_model -> delete($id);

        redirect('https://labo.rentracks.local/Todo/list/');
    }

    
}