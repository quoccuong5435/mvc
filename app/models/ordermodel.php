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

        public function list_order($table)
        {
            $sql = "select * from $table order by order_time";
            return $this -> db -> select($sql);
        }

        public function orderDetail($table_details , $table_product, $condition)
        {
            $sql = "select * from $table_details , $table_product where $condition";
            return $this -> db -> select($sql);
        }
        public function orderUser($table, $condition)
        {
            $sql = "select * from $table where $condition ";
            return $this -> db -> select($sql);
        }
        public function orderConfirm($table,$data, $condition)
        {
           
            return $this -> db -> update($table, $data, $condition);
        }
    }

?>