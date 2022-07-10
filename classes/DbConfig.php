 <?php
    class DbConfig 
    {	



        public  $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        private $_host = $cleardb_url["host"];
        private $_username = $cleardb_url["user"];
        private $_password = $cleardb_url["pass"];
        private $_database = substr($cleardb_url["path"],1);

       public $active_group = 'default';
       public $query_builder = TRUE;
       
        
        
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