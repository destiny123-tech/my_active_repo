<?php 



class Database 
{

    public $pdo ;
    public function __construct()
    {

        


        try
        { 
            
            $this->pdo = new PDO("mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_0f077f99122c4d4;", "bd2284bac778f7" ,"46c3b5ec") ;


            
           
        }
        catch(PDOException $e) 
        {
            die($e->getMessage);

        }
    
           

            


    }



   

}