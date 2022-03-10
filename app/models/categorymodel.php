<?php 
    class categorymodel extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function category($table)
        {
            $sql = "SELECT * FROM $table ";
            return $this->db->select($sql);
        }

        public function categorybyid( $table, $id)
        {
            $sql = "SELECT * FROM product WHERE id= :id";
            $data =array(':id' => $id);
             return $this->db->select($sql , $data);
        }

       public function insertcategory($table , $data)
       {
           return $this->db->insert($table,$data);     
       }

       public function updatecategory($table,$data, $condition)
       {
           return $this->db->update($table, $data , $condition);
       }

       public function deletecategory($table, $condition)
       {
           return $this->db->delete($table, $condition);
       }
    }
?>