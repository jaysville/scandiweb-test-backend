 <?php
    class DbConfig 
    {	


        
       
        private $_host = getenv("HOST");
        private $_username = getenv("USER");
        private $_password = getenv("PASS");
        private $_database = getenv("DATABASE");

      
       
        
        
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