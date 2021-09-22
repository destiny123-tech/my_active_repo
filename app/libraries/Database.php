<?php 



class Database 
{

    public $pdo ;
    public function __construct()
    {

        


        try
        { 
            
            $this->pdo = new PDO("mysql:host=localhost;dbname=realsensor;", "root" ,"") ;


            
           
        }
        catch(PDOException $e) 
        {
            die($e->getMessage);

        }
    
           

            


    }



   

}