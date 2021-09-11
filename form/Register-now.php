
  
<?php 

include_once "../core/init.php";

?>
  
  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for a course </title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
<div class="container">


    <form action="../classes/Controller.php" method="POST">
        <fieldset>
          <legend>Register a class now </legend>
          <!-- this is the division for the full name  -->
            <div class="mb-3">
            <label for="TextInput" class="form-label">Fullname:</label>
            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="surname first">
          </div>

           <!-- this is the division for the username -->
          <div class="mb-3">
            <label for="TextInput" class="form-label">Username:</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="username">
          </div>

         <!-- this is the division for the email -->
          <div class="mb-3">
            <label for="TextInput" class="form-label">Email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="email">
          </div>

          <div class="mb-3">
            <label for="TextInput" class="form-label">Password</label>
            <input type="text" id="email" name="password" class="form-control" placeholder="password">
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