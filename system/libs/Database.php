<?php 
    class Database extends PDO
    {
        public function __construct($connection , $user , $pass)
        {
            parent::__construct($connection, $user , $pass);
        }
        public function select($sql, $data = array(), $fetchstyle = PDO::FETCH_ASSOC)
        {
            $statement = $this ->prepare($sql);
            
            foreach($data as $key => $value)
            {
                
                $statement ->bindParam($key,$value);
            }
            $statement ->execute();
            return $statement ->fetchAll($fetchstyle);
        }

        public function insert($table,$data)
        {
            $keys = implode(",",array_keys($data)) ;
            
            $values = ":" .implode(", :",array_keys($data));
            $sql = "INSERT INTO $table($keys)  VALUES($values)";
            $statement =  $this->prepare($sql);
            foreach($data as  $key => $value)
            {
                $statement -> bindValue(":$key",$value);
            }
            return $statement-> execute();
        }

        public function update($table , $data , $condition)
        {
            $update_key = NULL;
            foreach($data as $key => $value)
            {
                $update_key .= "$key=:$key,";
            }
            $update_key = rtrim($update_key,',');
            
            $sql = "UPDATE $table SET $update_key WHERE $condition";
            
            $statement = $this -> prepare($sql);
            foreach($data as  $key => $value)
            {
                $statement -> bindValue(":$key",$value);
            }
            return $statement-> execute();
        }

        public function delete($table , $condition , $limit =1)
        {
            $sql =  "DELETE FROM $table WHERE $condition LIMIT $limit";
            $statement = $this -> prepare($sql);
            return $statement -> execute();
        }

        public function affectedRows($sql , $username , $password)
        {
            $statement = $this -> prepare($sql);
            $statement -> execute(array($username , $password));
            return $statement -> rowCount();
        }
         public function selectUser($sql , $username , $password)
         {
            $statement = $this -> prepare($sql);
            $statement -> execute(array($username , $password));
            return $statement ->fetchAll(PDO::FETCH_ASSOC);
         }
        
    }
?>