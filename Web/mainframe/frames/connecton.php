<?php 
/**
 * This class is connection template for mainframe 
 */
     class connect_me{
        private $servername = "localhost";
        private $dbname = "ninjaart";
        private $dbuser = "root";
        public $tablename = "ninjaart";
        private $dbpassword = "";

        protected function connection(){
            $conn = new mysqli($this->servername,$this->dbuser,$this->dbpassword,$this->dbname);
            return $conn;
        }
    }
