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

    public function register() 
    {

        $data = [
            "Form_details" => []
        ];
        $this->view("pages/register", $data);
        
    }
}

