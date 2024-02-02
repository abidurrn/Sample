<?php



    include_once 'config/config.php';



    Class Database{
        
        public $host = HOST;
        public $user = USER;
        public $password = PASSWORD;
        public $dbname = DATABASE;
        
        
        public $conn;
        public $error;
        
        
        //default function
        public function __construct(){
            
            $this->dbConnect();
            
            
        }
        
        
        //database connection 
        public function dbConnect(){
            
            $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);
            
            if(!$this->conn){
                
                $this->error = "Database connection failed";
                
                return false;
                
            }
            
        }
        
        
        
        //insert function 
        public function insert($sql){
            
            $result = mysqli_query($this->conn, $sql) or die($this->conn->error.__LINE__);
            
            if($result){
                
                return $result;
            }else{
                
                return false;
            }
              
        }
        
        
        
        //select function
        public function select($sql){
            
            $result = mysqli_query($this->conn, $sql) or die($this->conn->error.__LINE__);
            
            if(mysqli_num_rows($result) > 0){
                
                return $result;
                
            }else{
                
                return false;
                
            }
            
        }
        
        
        //update function 
        public function update($sql){
            
            $result = mysqli_query($this->conn, $sql) or die($this->conn->error.__LINE__);
            
            if($result){
                
                return $result;
            }else{
                
                return false;
            }
              
        }
        
        
     
        
        
    }
    

    
    

    









?>