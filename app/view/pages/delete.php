<?php 

$url = $_SERVER["REQUEST_URI"];

$explodeUrl = explode('?',$url);

$id = $explodeUrl[1];
echo $id;

$sql = "DELETE FROM users WHERE id=?
;";

require_once "../app/require.php";

$db = new Database();

$stmt = $db->pdo->prepare($sql);

$stmt->bindValue(1,$id);


if($stmt->execute())
{
    header("Location:users");
}





?>