<?php 
    class customermodel extends Model{



        public function insertCustomer($table, $data)
        {
            return $this -> db -> insert($table , $data);
        }

    }

?>