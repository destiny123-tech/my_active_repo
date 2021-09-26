<?php 




class Core 
{


    public $currentController;
    public $currentMethod;
    public $params = [];
    public $url;

    //public $url =$this->getUrl();

    ///to check if model received the data . 




    /// -------------------------



    public function __construct() 
    {




        

        
        $url = $this->getUrl();


        if($url !== null) 
        {

        if(file_exists("../app/controllers/".ucwords($url[0]).".php"))
        {

            $this->currentController = $url[0];
            unset($url[0]);

        }

        require_once "../app/controllers/" .$this->currentController .".php";
        $this->currentController = new $this->currentController;

       


        if(method_exists($this->currentController,$url[1])) 
        {
            $this->currentMethod = $url[1];
            unset($url[1]);
        }
        

        $this->params ? array_values($url) : [];
        call_user_func_array([$this->currentController,$this->currentMethod],$this->params);
    }

    }




///-----------the method below will be invoked and passed the value for the form field in the register page ----------///

/*    public function  passUserDetails($passFullname,$passUsername,$passEmail,$passPassword)
    {
        require_once "../app/require.php";

        $model = new Controller();

       return $passFullname;

       // $model->model($passFullname,$passUsername,$passEmail,$passPassword) ; 

    }
    */





    function getUrl() 
    {
        if(isset($_GET["url"])) 
        {
            $url =  rtrim($_GET["url"],"/") ;

            $url = filter_var($url,FILTER_SANITIZE_URL);

            $url = explode("/",$url);

            return $url;
        }
       
        
    }


}

