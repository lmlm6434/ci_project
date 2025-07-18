<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Todo_model extends CI_Model { 

    function __contsruct() {
        parent::__contsruct();
        $this -> db = $this->load->database('db1', TRUE);
    }

    function get_list() {
    
    $this -> db = $this->load->database('db1', TRUE);
       
    
    $select = "SELECT * from items where delete_flg = 0"; // data 参照

    $query = $this -> db -> query($select); //query実行

    $result = $query-> result(); //クエリ結果実行 

    return $result;
    }

    public function get($id) {

        $this -> db = $this -> load -> database('db1', TRUE);

        $get = "SELECT * FROM items where id ='".$id."'";

        $query = $this -> db -> query($get);

        $result = $query -> result();

        return $result;
    }


    public function insert($content) {

        $this -> db = $this -> load -> database('db1', TRUE);

        $insert = "INSERT INTO items(content) VALUES('".$content."')";
        
        $query = $this -> db -> query($insert);


    }
    

    public function delete($id) {

        $this -> db = $this -> load -> database('db1', TRUE); 

        $delete = "UPDATE items SET delete_flg = 1 WHERE id = " . $id;

        $query = $this -> db -> query($delete);



    }



}