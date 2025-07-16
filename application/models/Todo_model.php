<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Todo_model extends CI_Model { 

    function __contsruct() {
        parent::__contsruct();
    }


    function get_list() {
    
    
        $select = "SELECT * from items"; // data 参照

        $query = $this -> db -> query($select); //query実行

        $result = $query-> result(); //クエリ結果実行 

        return $result;
    }





}