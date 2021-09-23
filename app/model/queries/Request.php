<?php 

class Request 

{

    private $db ;
    private $conn;
    private $sql;
    private $stmt ; 
    public function __construct()
    {
        require_once "../app/require.php";

        $this->db = new Database();

        //initialize the connection from the property pdo 
        //which is from the database class that was instanciated above 

        $this->conn = $this->db->pdo;

        $this->sql = "SELECT * FROM users ";


    }


    public function setQuery() 
    {
        $this->stmt = $this->conn->prepare($this->sql) ;
    }


    public function getQuery() 
    {

        $this->setQuery();
        if($this->stmt->execute()) 
        {
            return $this->stmt->fetchAll();
        }
        
    }

}

/*
$request = new Request();






foreach($request->getQuery() as $value)
{
    echo "<pre>";

    print_r($value);
}

*/
/*
require_once "../app/require.php";

$db = new Database();

$sql = "SELECT * FROM users";


$stmt = $db->pdo->prepare($sql);

if( $stmt->execute()) 
{
    $result = $stmt->fetchAll();

    // when we loop through the $result we get an array of each value 
    // as a result using th foreach($results as $value) 
    //  therefore we could pass the results to the controller then 
    // the controller would pass it tho the users page 
    // where we can output a data at a time using the foreach 
    //loop and a couple of html code raped arround it . 


}

*/