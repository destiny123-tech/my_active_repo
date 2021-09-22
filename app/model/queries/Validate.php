<?php 

//fullname Normal text validation 
// username normal text validation 
// password normal password validation  password will also be hashed . 
//email normal email validation 

class Validate 
{

    public $fullname /* this fullname will be assigned the value of the passfull name receive from Controller*/;
    private $invalidFullname; 

    private $username ; 
    private $invalidUsername;

    private $email ;
    private $invalidEmail;

    private $password;
    private $invalidPassword;



    public function __construct()
    {

       echo $this->fullname;
        
    }

///---------- validating fullname -----------//
    public function validateFullname($passFullname) 
    {

        if(preg_match('/^[a-zA-Z\s]+$/',$passFullname))
        {
            return true;// if the form is valid 
        }
        else 
        {
            return false;// as for an invalid form 
        }

     


        

    }




    ///---------- validating username -----------//
    public function validateUsername($passUsername) 
    {

        if(preg_match('/^[a-zA-Z\s]+$/',$passUsername)) 
        {
            return true;
        }
        else
        {
            return false;
        }
    }



    ///---------- validating email -----------//
    public function validateEmail($passEmail) 
    {

        if(filter_var($passEmail,FILTER_VALIDATE_EMAIL)) 
        {
            return true;

        }
        else 
        {
            return false ;
        }
    }




    ///---------- validating password -----------//
    public function validatePassword($passPassword) 
    {

        if(preg_match('/^[a-zA-Z0-9\s]+$/',$passPassword)) 
        {

            return true;
        }
        else 
        {
            return false;
        }
    }






}