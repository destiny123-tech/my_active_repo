<?php



class Pages extends Controller
{


    public function __construct()
    {
        
    }

    public function index() 
    {
        
    
       $data = [
            "title" => "Home page"
        ];

        $this->view("pages/index", $data);
        
    }


    public function users() 
    {
        
    
       $data = [
            "title" => "Users"
        ];

        $this->view("pages/users", $data);
        
    }



    public function update() 
    {
        
    
       $data = [
            "title" => "update"
        ];

        $this->view("pages/update", $data);
        
    }

    public function delete() 
    {
        
    
       $data = [
            "title" => "delete"
        ];

        $this->view("pages/delete", $data);
        
    }


    public function register() 
    {

        $data = [
            "Form_details" => []
        ];
        $this->view("pages/register", $data);
        
    }
}

