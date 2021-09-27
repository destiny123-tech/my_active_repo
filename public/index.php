<?php


    require_once "../app/require.php";

    $trimeUrl = trim($_SERVER["REQUEST_URI"],"/");

   
    echo "the page is working";

    if($trimeUrl == "http:realsensorcrud.herokuapp.com")
    {
        header("Location:Pages/index");
    }
    else
    {
       echo $trimeUrl;
    }



  




