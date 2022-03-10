<?php 
    class Model
    {
        protected $db =  array();
        public function __construct()
        {
            $connection = 'mysql:dbname=shopping; host = localhost; charset=utf8';
            $user  = 'root';
            $pass ='';
            $this->db = new Database($connection , $user , $pass);
            
            
        }
    }
?>