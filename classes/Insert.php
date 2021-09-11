<?php 

include_once "../core/init.php";

/* 

this insert class will be extending the Pdo class for inserting data 
passed to it by the controller from the view . 

*/
class Insert extends DB

{

    private $stmt;



  
    
    public function __construct() 
    {
      

    
      
    }
    


    public function insertQuery($query,$fullname,$username,$email, $password, $course)  
    {
    
      
      $this->stmt = $this->connection()->prepare($query);
      

        if($this->stmt) 

        {
          $this->stmt->bindParam(":fullname",$fullname); 
          $this->stmt->bindParam(":username",$username) ; 
          $this->stmt->bindParam(":email", $email); 
          $this->stmt->bindParam(":password",$password) ;
          $this->stmt->bindParam(":course",$course);
          
            $this->stmt->execute();
        }

        
    }


    protected function requestQuery($query) 
    {

       $this->stmt =  $this->pdo->prepare($query) ;

       if($this->stmt) 

       {
        $this->stmt->execute();
       }
    }

}


$insert = new Insert() ; 

