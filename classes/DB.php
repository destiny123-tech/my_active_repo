<?php 


include_once "../core/init.php";



class DB 
{

 public $pdo ; 

public function connection()
{
    try {
    $this->pdo = new  PDO("mysql:host=localhost;dbname=realsensor;charset=utf8", "root","") ;

    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "The error " . $e->getMessage() . " occured.";
}





return $this->pdo;


}








/*

protected function getConnection() 
{
    return $this->pdo ; 
}

*/

  


}


$db = new DB();


