<?php


echo "i got to the index page in the public directory ";


    // Program to display URL of current page.
      
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $link = "https";
    else
        $link = "http";
      
    // Here append the common URL characters.
    $link .= "://";
      
    // Append the host(domain name, ip) to the URL.
    $link .= $_SERVER['HTTP_HOST'];
      
    // Append the requested resource location to the URL
    $link .= $_SERVER['REQUEST_URI'];
          
    // Print the link


    $trimUrl = trim($link,'/');

    



    //require_once "../app/require.php";
   
    

    if($trimUrl == "http://localhost/realsensorcrud")
    {
        header("Location:Pages/index");
    }
    else
    {
        require_once "../app/require.php";
       
    }
