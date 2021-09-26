

<?php 



require_once "../app/model/queries/Request.php";

require_once "../app/require.php"; 

$controller = new Controller();

/*
foreach($controller->getUsers() as $value) 
{
    echo "<div>" ;
   echo "this is the fullname" . $value['fullname'] . "<br>";
   echo "this is the username" . $value['username'] . "<br>";
   echo "this is the email" . $value['email'] . "<br>";
   echo "this is the password" . $value['password'] . "<br>";
   echo "this is the course " . $value['course'] ;

   echo "</div> <br>";
}


*/
?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Training In Edo State</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="container">


<nav class="navbar   border-bottom navbar-expand-md navbar-light" id="Top-nav">
    
    <div class="container-xxl">
        <a href="#intro" class="navbar-brand "> 
            <span class="fw-bold text-secondary">
                RS-Computer-School
            </span>
        </a>
        <!-- toggle button for mobile nav -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" 
         aria-controls="main-nav" aria-expanded="false" aria-label="toggle navigation">
        <span class="navbar-toggler-icon"></span>

        </button>

        <!-- navbar links   -->
        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav">

            <li class="nav-item">
                            <a href="index" class="nav-link">Home</a>
            </li>

                <li class="nav-item">
                    <a href="#Graphics-Design" class="nav-link"> Graphics-Design</a>
                </li>

                <li class="nav-item">
                    <a href="#Web-Development" class="nav-link">Web-Development</a>
                </li>

                <li class="nav-item">
                    <a href="users" class="nav-link">See our current students</a>
                </li>

                <li class="nav-item d-md-none">
                    <a href="register" class="nav-link">Register-Now</a>
                </li>

                <li class="nav-item ms-2 d-none d-md-inline">
                    <a href="register" class="btn btn-secondary">Register Now</a>
                </li>
            </ul>
        </div>
    </div>

</nav>








<?php    foreach($controller->getUsers() as $value) {  ?>
<section class="my-5" id="CAD">

        <div class="row my-5 align-items-center justify-content-center g-0" id="pricing">
            
    
    
            <div class="col-9 col-lg-4">
                <div class="card border-primary border-2">
                    <div class="card-header text-center text-primary"> <?php echo $value['fullname'];      ?>
                        <div class="card-body text-center py-5">
                            <h4 class="card-title"> <?php  echo $value['username'] ;    ?> </h4>
                            <p class="lead card-subtitle"> <?php echo $value['email'] ; ?></p>
                            <p class="display-4 my-4 text-primary fw-bold"><?php echo $value['course'];   ?></p>
                            <a href=<?php echo "update?9sk989n?{$value['id']}" ;?>
                            class="btn btn-outline-primary btn-lg mt-3">Update this account</a>
                            <a  href=<?php echo "delete?{$value['id']}";?> 
                            class="btn btn-outline-primary btn-lg mt-3">Delete this account</a>

                         
    
                            
                            
                        </div>
                    </div>
                </div>
            </div>   
    
        </div>
    
    </section>
    
<?php      } ?>

  
</div> 

</div>

<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>       


