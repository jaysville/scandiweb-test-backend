 <?php
    class DbConfig 
    {	
        private $_host = 'remotemysql.com' ;
        private $_username = 'pXJ85BJKVG';
        private $_password = 'HueGBKbTcy';
        private $_database = 'pXJ85BJKVG';
        private $port = 3306;
        
        
        protected $connection;
        
        public function __construct()
        {
            if (!isset($this->connection)) {
                
                $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database,$this->port);
                
                if (!$this->connection) {
                    echo 'Cannot connect to database server';
                    exit;
                }			
            }	
            
            return $this->connection;
        }
    }
    ?>