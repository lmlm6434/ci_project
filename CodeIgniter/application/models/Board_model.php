<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/* 
    web board main controller
*/


class Board_model extends CI_Model {


    function construct() {
        parent::__construct();
        $this -> db = $this->load->database('db2', TRUE);
    }



    public function get_list($table = 'board') {

        $this -> db = $this -> load -> database('db2', TRUE);

        $select_list = "SELECT * FROM ".$table. " ORDER BY board_id ASC";

        $query = $this ->db -> query($select_list);

        $result = $query -> result();

        return $result;

    }

}
