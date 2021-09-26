<?php


    require_once "../app/require.php";

    $trimeUrl = trim($_SERVER["REQUEST_URI"],"/");

    if($trimeUrl == "Realsensor.com")
    {
        header("Location:Pages/index");
    }
    else
    {
        echo "";
    }




