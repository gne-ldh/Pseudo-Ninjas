<?php 
    include "connecton.php";
    /**
     * this class provide data in form of array and send that data to the call area
     */
    class feach_data extends connect_me{
        protected $name;
        protected $sem;
        protected $Branch;
        protected $email;
        public $tablename = "ninjaart";
        //Here we required the sql commend as a parameter 
        public function getinfo($sql){
            $result = $this->connection()->query($sql);
            $numRows = $result->num_rows;
            // this line checks for the result is empty of not (emplty=true? else : if)
            if($numRows > 0){
                $data = $result->fetch_array();
                return $data;
            }else{
                $tell = "data_empty";
                header("Location: ../error_time.php?wrong = ".$tell);
            }
        }
    }