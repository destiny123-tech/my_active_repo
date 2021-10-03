


<?php



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
   


    if($trimUrl == "http://localhost/realsensorcru")
    {
        header("Location:Pages/index");
    }
    else
    {
        require_once "../app/require.php";
       
    }


?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Training In Edo State</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container">




<section class="my-5" id="Graphics-Design">

<div class="container">
    <div class="text-center">
        <h2></h2>
    
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <p class="lead my-4">
                 Welcome to my CRUD website,designed to show a simple CRUD system.
            </p>
            
            <p class="lead">

                
                
         </p>
        
        </div>
    </div>
</div>

    <!-- this division is for the accordions -->





    <!-- this division is for the cards -->
    
    
         <div class="row my-5 align-items-center justify-content-center g-0" id="pricing">
         
    

    
            <div class="col-9 col-lg-4">
                <div class="card border-primary border-2">
                    <div class="card-header text-center text-primary"> CRUD
                        <div class="card-body text-center py-5">
                            <h4 class="card-title"> C : Create data. </h4>
                            <h4 class="card-title"> R : Read data </h4>
                            <h4 class="card-title"> U : Update data </h4>
                            <h4 class="card-title"> D : Delete data </h4>
                           
                          <!--  <p class="card-text mx-5 text-muted d-none d-lg-block">
                            </p> -->
    
                            <a href="Pages/index" class="btn btn-outline-primary btn-lg mt-3">Go to site</a>
                            
                        </div>
                    </div>
                </div>
            </div>
    
    
    
    
            
    
        </div>
    
    </section>
    





</div> <!-- this is the closing tag for  the container division  -->

<script src="./js/bootstrap.bundle.js"> </script>


</body>
</html>