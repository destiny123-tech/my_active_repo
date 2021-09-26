<?php 



class Controller 
{ 

    public $stmt;


    public $fullnameError;
    public $usernameError;
    public $emailError;
    public $passwordError;

  
    public $queryFullname;
    public $queryUsername;
    public $queryEmail;
    public $queryPassword;
    public $queryCourse;


// this are the properties for fullname  . 
    public $queryFullnameUpdate;
    public $queryUsernameUpdate;
    public $queryEmailUpdate;


    public $fullnameUpdateError;
    public $usernameUpdateError;
    public $emailUpdateError;
// -----------------------------------------------------//


    public function __construct()
    {
      

        
  

        
     
    }



    public function getUsers() 
    {
        require_once "../app/model/queries/Request.php";

        $request = new Request();

        $result = $request->getQuery();

        return $result;



    }
   

    /// the modelUpdate method is for updating the users details 

    public function modelUpdate($passFullnameUpdate,$passUsernameUpdate,$passEmailUpdate,$passId) 
    {

        //I did not reassign Id i will simply use it from the parameter argument value . 



    

    require_once "../app/model/queries/Validate.php";

    $validate = new Validate();

    // this guy is actually returnning true and false . 
   

    //if the validation is successfull (it returns true ) then go on to call the database method and pass the query

    //else if the validation is not successfull then return an error message .

    //----working with data from the fullname form input . 
    if($validate->validateFullname($passFullnameUpdate) == true)
    {

        /// now testing 
        $this->queryFullnameUpdate = $passFullnameUpdate;
    }
    else 
    {
        $this->fullnameUpdateError = "Invalide fullname";
    }



    if($validate->validateUsername($passUsernameUpdate) == true) 
    {

        // now testing 
        $this->queryUsernameUpdate = $passUsernameUpdate;
    }
    else
    {
        $this->usernameUpdateError = "Invalid username";
    }


    
    if($validate->validateEmail($passEmailUpdate) == true) 
    {

        $this->queryEmailUpdate = $passEmailUpdate;
    }
    else 
    {
        $this->emailUpdateError = "Invalid email";
    }


    


//i was going to start querying . 

  

    

    if(isset($this->queryFullnameUpdate) && isset($this->queryUsernameUpdate) && isset($this->queryEmailUpdate)) 
    {  



        /*  This is the initial way i tried to execute th equery but it took too long . 

    require_once "../app/model/queries/Insert.php";

    $insert = new Insert($this->queryFullname,$this->queryUsername,$this->queryEmail,$this->queryPassword,$this->queryCourse);


    if($insert) 
   {
       $insert->prepare();

       ;
      if($insert->bindSql()) 
      {
          echo "bind was successfull";
      }
      else 
      {
          echo "bind was not successfull";
      }
   } */


   $sql = "UPDATE users SET 

   `fullname` =?, 
   `username` =?, 
   `email` = ? 

   WHERE id = ?
   ;"; 



require_once "../app/require.php";

   $db = new Database();
   $preStmt = $db->pdo;


   $stmt = $preStmt->prepare($sql);


   $stmt->bindValue(1,$this->queryFullnameUpdate);
   $stmt->bindValue(2,$this->queryUsernameUpdate);
   $stmt->bindValue(3,$this->queryEmailUpdate);
   $stmt->bindValue(4,$passId);


   $stmt->execute();


   

  
  

    }
}

    // the model for inserting and validating the form . 

    //--- it is verified that the value got here . 
   public function model($passFullname,$passUsername,$passEmail,$passPassword,$passSelected) 
   {


    

    require_once "../app/model/queries/Validate.php";

    $validate = new Validate();

    // this guy is actually returnning true and false . 
   

    //if the validation is successfull (it returns true ) then go on to call the database method and pass the query

    //else if the validation is not successfull then return an error message .

    //----working with data from the fullname form input . 
    if($validate->validateFullname($passFullname) == true)
    {

        /// now testing 
        $this->queryFullname = $passFullname;
    }
    else 
    {
        $this->fullnameError = "Invalide fullname";
    }



    if($validate->validateUsername($passUsername) == true) 
    {

        // now testing 
        $this->queryUsername = $passUsername;
    }
    else
    {
        $this->usernameError = "Invalid username";
    }


    
    if($validate->validateEmail($passEmail) == true) 
    {

        $this->queryEmail = $passEmail;
    }
    else 
    {
        $this->emailError = "Invalid email";
    }



    if($validate->validatePassword($passPassword) == true)
    {

        $this->queryPassword = $passPassword;
    }
    else 
    {
        $this->passwordError = "Invalid password";
    }

//i was going to start querying . 

    $this->queryCourse = $passSelected;

    

    if(isset($this->queryFullname) && isset($this->queryUsername) && isset($this->queryEmail) && isset($this->queryPassword)) 
    {  



        /*  This is the initial way i tried to execute th equery but it took too long . 

    require_once "../app/model/queries/Insert.php";

    $insert = new Insert($this->queryFullname,$this->queryUsername,$this->queryEmail,$this->queryPassword,$this->queryCourse);


    if($insert) 
   {
       $insert->prepare();

       ;
      if($insert->bindSql()) 
      {
          echo "bind was successfull";
      }
      else 
      {
          echo "bind was not successfull";
      }
   } */


   $sql = "INSERT INTO `users` 
    (fullname,username,email,password,course) 
    Values (:fullname,:username,:email,:password,:course);
   
   
   ";



require_once "../app/require.php";

   $db = new Database();
   $preStmt = $db->pdo;

   $stmt = $preStmt->prepare($sql);

  
  
   $stmt->execute(array(':fullname' => $this->queryFullname,':username' => $this->queryUsername, ':email' => $this->queryEmail, 
   ':password' => $this->queryPassword, ':course' => $this->queryCourse));
   




    }
 
   
    
    


   }



   public function fetchUserDetails($identify)
   {

    $id = $identify;
    $updateSql = "SELECT fullname,username,email FROM users WHERE id =?";

    $db = new Database();


    $stmt = $db->pdo->prepare($updateSql);
    if($stmt)
    {
        $stmt->bindValue(1,$id);

        $stmt->execute();


        $result = $stmt->fetch();

        return $result;

    }




   }


       // shrink the guy up into handling one form value at a time . 


   

   public function view($view, $data =[]) 
   {
       if(file_exists("../app/view/" . $view . ".php"))
       {
           require_once "../app/view/" . $view .".php";
       }
       else 
       {
           die("The page is not available ");
       }
   }
    
}

