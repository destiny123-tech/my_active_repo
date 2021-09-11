<?php if(!isset($_POST["submit"]) )
{

    header("Location: Register-now.php");
}
else{




include_once "../core/init.php";


$name = htmlspecialchars($_POST["selected"]);





if($name = "Web-Dev")
{
    include_once "../includes/webdev.php";
}

elseif($name = "Computer Eng")
{
    include_once "../includes/cad.php";
}






}
?>





