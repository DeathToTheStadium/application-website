<?php

//initialize connection
class Database{
    private $ServerHost;
    private $UserName;
    private $Password;
    private $Database;

    protected function connect(){
        //sets my database variables
        $this->ServerHost = 'localhost';
        $this->UserName = 'root';
        $this->Password = '';
        $this->Database = 'cms-test';

        $conn = new mysqli($this->ServerHost,$this->UserName,$this->Password,$this->Database);

        if (!isset($conn)){
            
            return "internal error code 21";
        }
        else{
            return $conn;
        }
    }




}

class Users extends Database{
 

    protected function getusers(){

        $sql="SELECT * FROM pages";
        
        $result = $this->connect()->query($sql);
        $numrow = $result->num_rows;
        if($numrow > 0){
            while($row=$result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
        else{
            return false;
        }
    }


}

class viewuser extends Users{

    public function getdata(){
       $array = $this->getusers();
       foreach($array as $data){
           echo "<br/>".$data["PAGE_NAME"]."<br/>";
       }
    }
}

$new = new viewuser;
$new->getdata();