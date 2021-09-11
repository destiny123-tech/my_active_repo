<?php 
include_once "../core/init.php";

/* 

we will use this controller to extend other classes 
that we would have included using spl_autoload_register 

*/


class Controller  extends Insert
{

    private $fullname; 
    private $username ; 
    private $email;
    private $password;
    private $course; 
   





    private $query; 
    private $request;

    public function __construct()
    { 

        if(isset($_POST["submit"])) 
        {


        $this->fullname = htmlspecialchars($_POST["fullname"]);
        $this->username = htmlspecialchars($_POST["username"]);
        $this->email = htmlspecialchars($_POST["email"]); 
        $this->password = htmlspecialchars($_POST["password"]);
        $this->course = htmlspecialchars($_POST["selected"]);

        //we have validated that the values where gotten from the form . 


        }






        $this->query = "INSERT INTO `users` SET 
        `fullname` = :fullname, 
        `username` = :username, 
        `email` = :email, 
        `password` = :password, 
        `course` = :course, 
        `duration` = 'one year' 


        ;";



        echo $this->query;

        $this->request = " SELECT * FROM users ;
    
        
        ;"; 
        
        //$this->requestQuery($this->request);
    


    
        $this->insertQuery($this->query,$this->fullname,$this->username,$this->email,$this->password,$this->course);

    }




    


    

    
       
  

   
} 



$control = new Controller();