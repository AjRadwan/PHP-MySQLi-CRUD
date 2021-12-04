<?php
class Database{
//getting define db value from config file making it dynamic with variable
    public $host = DB_HOST;
    public $user = DB_USER;
    public $password = DB_PASS;
    public $db_name = DB_NAME;


    public $link;
    public $error;

    public function __construct(){
        $this->ConnectDB();
    }

    private function ConnectDB(){
        $this->link = new mysqli($this->host, $this->user, $this->password, $this->db_name);
 //showing connection error information dynamically
        if(!$this->link){
            $this->error = error_log('Connection error: ' . $this->link->connect_error);
        }
    }

 //select or read Data
    public function select($query){
      $result = $this->link->query($query) or die($this->link->error.__LINE__);
      if($result->num_rows > 0){
          return $result;
      }else{
          return false;
      }
    }
}