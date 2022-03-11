<?php
    class Base extends databse{
        private $conn;
        public function __construct()
        {
            $connn = new databse;
            $this->conn = $connn->database();
        }
        public function all($table = '')
        {
            try {
                $sql = "SELECT* FROM $table";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                $i = 0;
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            } catch (\Throwable $e) {
                echo "Lỗi: " . $e->getMessage();    
            }
        }
        public function find($table = '',$id = null)
        {
            try {
                $sql = "SELECT* FROM $table WHERE id = $id";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                $i = 0;
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
            } catch (\Throwable $e) {
                echo "Lỗi: " . $e->getMessage();    
            }
        }
        public function update($table,$a = [],$id)
        {
            $b = implode($a);
            try {
                $sql = "UPDATE $table SET $b WHERE id = $id";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
            } catch (\Throwable $th) {
                echo "Lỗi: " . $th->getMessage();    
            }
        }
        public function insert($table,$a = [])
        {
            $b = implode($a);
            $sql = "INSERT INTO $table SET $b"; 
            var_dump($sql);
            die;
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();   
            $LAST_ID = $this->conn->lastInsertId();
            return $LAST_ID;
        }
        public function delete($table ='',$id=null)
        {
            try {
                $sql = "DELETE FROM $table WHERE id = $id";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
            } catch (\Throwable $th) {
                echo "Lỗi: " . $th->getMessage();
            }
        }
        public function where($input='',$table='',$data = '',$argument = '')
        {
            if ($input == '') {
                $input = '*';
            }
            try {
                $sql = "SELECT $input FROM $table WHERE $data = '$argument'";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                $i = 0;
                $libary = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $libary;
            } catch (\Throwable $e) {
                echo "Lỗi: " . $e->getMessage();    
            }
        }
        public function Group($a = [] , $table='')
        {   
            $b = implode($a);
            $sql = "SELECT $b FROM $table INNER JOIN prodcts_sale ON comment.products_id = prodcts_sale.id GROUP BY products_name,image,id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function Group2($id=null)
        {
            $sql = "SELECT prodcts_sale.products_name,manage_user.user_name,comment.text,comment.id,comment.created_time FROM `comment` INNER JOIN prodcts_sale ON comment.products_id = prodcts_sale.id JOIN manage_user ON comment.user_id = manage_user.id WHERE comment.products_id=$id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
    