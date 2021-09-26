
<?php 
use Swoole\Http\Request;




function getControllerInstance() 
{
  return new Controller;
}



$url = $_SERVER["REQUEST_URI"];



if(isset($url)) 
{

  $modelPrepare = new Controller();


  $explodeUrl = explode('?',$url);
  
  
  $id = $explodeUrl[2]; 
  
  


  $ourValue = $modelPrepare->fetchUserDetails($id);

  
}





if(isset($_POST["submit"])) 
{


  unset($ourValue);


  $fullnameUpdate = htmlspecialchars($_POST["fullname"],ENT_QUOTES,'utf-8');
  $usernameUpdate = htmlspecialchars($_POST["username"],ENT_QUOTES,"utf-8");
  $emailUpdate = htmlspecialchars($_POST["email"],ENT_QUOTES,"utf-8");
  




  ///----- this part is also working parfectly ---------------------///

  //no field for selected cause it always has a value . 

 // if(!empty($valueFullname) && !empty($valueUsername) && !empty($valueEmail) && !empty($valuePassword))
  //{

    /// it is verified that the form value got to this place . 

    
    require_once "../app/require.php";
    $modelUpdate = new Controller();
  
    ///---- this method is in the core page and it's function is to recieve the user inut and pass it to the model ----///
    $modelUpdate->modelUpdate($fullnameUpdate,$usernameUpdate,$emailUpdate,$id);


    new Database();





  /// ----------------------------empty form validation ---------------------------------------------------///
  if(empty($fullnameUpdate)) 
  {
    $noValueFullname = "Please insert a fullname to be updated";
  }
  else {


   
    if(isset($modelUpdate->fullnameUpdateError)) 
    {

      
      $noValueFullname = $modelUpdate->fullnameUpdateError;
    }
    else 
    {
      $valueFullnameUpdate = $fullnameUpdate;
    }
  }
  
 

  
  
 
 

/// -------------------------this path of the code is working parfectly ------------------///

  if(empty($usernameUpdate)) 
  {
    $noValueUsername = "Please insert a  username to be updated ";
  }
  else 
  {   

    if(isset($modelUpdate->usernameUpdateError)) 
    {

      
      $noValueUsername = $modelUpdate->usernameUpdateError;
    }
    else 
    {
      $valueUsernameUpdate = $usernameUpdate;
    }
  }






  if(empty($emailUpdate)) 
  {
    $noValueEmail = "Please insert an email to be updated";
  }
  else 
  {
    if(isset($modelUpdate->emailUpdateError)) 
    {
      $noValueEmail = $modelUpdate->emailUpdateError;
    }
    else
    {
      $valueEmailUpdate = $emailUpdate;
    }
  }

  //--------------------------


  /*

echo $valueFullnameUpdate . "<br>";
echo $valueEmailUpdate . "<br>";
echo $valueUsernameUpdate . "<br>";

*/

  








}








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


    <form action=<?php echo  $_SERVER["REQUEST_URI"]  ?> method="POST">
        <fieldset>
          <legend>Update users </legend>
          <!-- this is the division for the full name  -->
            <div class="mb-3">
            <label for="TextInput" class="form-label">Fullname:</label>
            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="surname first" value=<?php
            if(isset($ourValue)){echo $ourValue['fullname'];}  
            ?>>
          
            <!-- empty fullname form message  -->
            <div>
              <p  style="color:red"><?php if(isset($noValueFullname)) {echo $noValueFullname ; } ; ?></p>
            </div>
          
          </div>
          <!-- error message if there is any -->
            



           <!-- this is the division for the username -->
          <div class="mb-3">
            <label for="TextInput" class="form-label">Username:</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="username"value=<?php
            if(isset($ourValue)){  echo $ourValue['username'];}
            ?> >

            <div>
              <p  style="color:red"><?php if(isset($noValueUsername)) {echo $noValueUsername ; } ; ?></p>
            </div>
          </div>

         <!-- this is the division for the email -->
          <div class="mb-3">
            <label for="TextInput" class="form-label">Email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="email"  value=<?php
            if(isset($ourValue)){echo $ourValue['email'];}
            ?>>
            <div>
              <p  style="color:red"><?php if(isset($noValueEmail)) {echo $noValueEmail ; } ; ?></p>
            </div>
          </div>

        <!--  <div class="mb-3">
            <label for="TextInput" class="form-label">Password</label>
            <input type="password" id="email" name="password" class="form-control" placeholder="password">

            <div>
              <p  style="color:red"><?php if(isset($noValuePassword)) {echo $noValuePassword ; } ; ?></p>
            </div>
          </div>
          
        


           <div class="mb-3">
            <label for="Select" class="form-label">Select course:</label>
            <select  id="Select" name="selected" class="form-select">
              <option>Computer Eng</option>
              <option >Web-Dev</option>
              <option>CAD</option>
              <option>Graphics-Design</option>
            </select>
          </div>

          -->






         <!--       <div class="mb-3">

            i commented out this button becouse its not needed . 
           
    
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
              <label class="form-check-label" for="disabledFieldsetCheck">
                Can't check this
              </label>
            </div>
          </div>
      
    --> 
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>


        </fieldset>
      </form>


     



</div>







    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>