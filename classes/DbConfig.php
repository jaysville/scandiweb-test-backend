 <?php
    class DbConfig 
    {	


        
       
        private $_host = "us-cdbr-east-06.cleardb.net";
        private $_username = "b14aa5b8700692";
        private $_password = "197627b0";
        private $_database = "heroku_4c03aa2bac8d630";

      
       
        
        
        protected $connection;
        
        public function __construct()
        {
            if (!isset($this->connection)) {
                
                $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
                
                if (!$this->connection) {
                    echo 'Cannot connect to database server';
                    exit;
                }			
            }	
            
            return $this->connection;
        }
    }
    ?>