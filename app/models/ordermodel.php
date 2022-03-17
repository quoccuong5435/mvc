<?php 
     class ordermodel extends Model
     {
        public  function  insertOrder($table_order,$data_order)
        {
            return $this -> db -> insert($table_order,$data_order);
        }
        public  function  insertDetails($table_details , $data_details)
        {
            return $this -> db -> insert($table_details , $data_details);
        }
    }

?>