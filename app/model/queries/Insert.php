<?php 

require_once "../app/require.php";

class Insert 
{


    private $sql = "INSERT INTO `users` SET 
    `fullname` = :fullname, 
    `username` = :username, 
    `email` = :email,
    `password` = :password, 
    `course` = :course
    
    ;" ;
    private $bindFullname;
    private $bindUsername;
    private $bindEmail;
    private $bindPassword;
    private $bindCourse;





    public function __construct($bindFullname,$bindUsername,$bindEmail,$bindPassword,$bindCourse)
    {
        $this->bindFullname = $bindFullname;
        $this->bindUsername = $bindUsername ;
        $this->bindEmail = $bindEmail; 
        $this->bindPassword = $bindPassword;
        $this->bindCourse = $bindCourse;





    }


    public function prepare() 
    {

        require_once "../app/require.php";

        $db = new Database();

        $db = $db->pdo;

        return $db->prepare($this->sql);

    
    }


    public function bindSql() 
    {
        if($this->prepare()) 
        {
            $stmt = $this->prepare();

            $stmt->bindParam(":fullname",$this->bindFullname);

            $stmt->bindParam(":username",$this->bindUsername);

            $stmt->bindParam(":email",$this->bindEmail);

            $stmt->bindParam(":password",$this->bindPassword);

            $stmt->bindParam(":course",$this->bindCourse);
        }

        
    }

   


   





}