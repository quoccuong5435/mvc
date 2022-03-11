<?php 
    class postmodel extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function list_post($table)
        {
            $sql = "SELECT * FROM $table";
            return $this -> db ->select($sql);
        }

        public function insertPost($table , $data)
        {
            return $this -> db -> insert($table , $data);
        }

        public function selectById($table, $condition)
        {
            $sql = "select * from $table where $condition ";
            return $this ->db ->select($sql);
        }

        public function update_post($table,$data, $condition)
        {
            return $this -> db -> update($table,$data, $condition);
        }

        public function deletePost($table , $condition)
        {
            return $this ->db ->delete($table , $condition);
        }

        public function selectWhere($table_category,$table)
        {
            $sql = "select * from $table_category, $table where  $table_category.id = $table.id_category_post ";
            return $this ->db -> select($sql);
        }

        public function selectCategoryById($table_1, $table_2 , $condition)
        {
            $sql = "select * from $table_1, $table_2 where $condition";
            return $this -> db -> select($sql);
        }
    }
?>