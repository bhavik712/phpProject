<?php
    class Database{
        public $connection;
        
        public function __construct($config, $username, $password, $resultMode){

            $dsn = "mysql:".http_build_query($config,'',';');
            
            // $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";
            try{
                $this->connection = new PDO($dsn,$username,$password,[
                    PDO::ATTR_DEFAULT_FETCH_MODE => $resultMode
                ]);
            }catch (PDOException $e){
                echo $e->getMessage();
        
            };

        }

        public function executeQuery($query, $param = []){
            $statement = $this->connection->prepare($query, $param);
            $statement->execute($param);
            return $statement;

        }
    }
?>