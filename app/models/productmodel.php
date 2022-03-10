<?php
    class productmodel extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function insertProduct($table,$data)
        {
            return $this -> db -> insert($table , $data);
        }

        public function list_product($table)
        {
            $sql = "SELECT * FROM $table";
            return $this -> db -> select($sql);
        }

        public function delete_product($table , $condition)
        {
           return $this ->db -> delete($table , $condition);
        }

        public function selectById($table ,$condition)
        {
            $sql = "SELECT *  FROM $table WHERE $condition ";
            return $this -> db -> select($sql);
        }
        public function updateproduct($table,$data, $condition)
        {
            return $this->db->update($table, $data , $condition);
        }

        public function selectWhere($table_1, $table_2)
        {
            $sql = "SELECT * FROM $table_1, $table_2 where $table_1.id = $table_2.id_category_product ";
            return $this -> db -> select($sql);
        }
    }
?>