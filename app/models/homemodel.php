<?php 
    class homemodel extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function login_auth($table , $username ,$password)
        {  
            $sql = "SELECT * FROM $table WHERE username=? AND password=? ";
            return $this -> db  -> affectedRows($sql , $username , $password);
        }

        public function get_login($table , $username  , $password)
        {
            $sql = "SELECT * FROM  $table WHERE username=? AND password=?";
            return $this-> db -> selectUser($sql , $username , $password);
        }
    }
?>