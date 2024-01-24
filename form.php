<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>helpers|registation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <style>
    body{
      background-color:gray;
      color:white;
    }

    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HELPERS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="margin-left:80%";>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="delet.php">Delet doner</a></li>
            <li><a class="dropdown-item" href="#">About</a></li>
     </ul>
        </li>
       
      </ul>
     
    </div>
  </div>
</nav>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6 mt-5" >
        <form action="form.php" method="post" enctype="multipart/form-data" style="margin-top: 100px;text-align:justify;">
            <label for="name">NAME</label>
            <input type="text" id="name" name="NAME" required style="text-transform: uppercase;"></input><br><br>
            <label for="dob">DOB</label>
            <input type="date" id="dob" name="DOB" required ><br><br>
            <label for="blood">Blood group</label>
            <input type="text" id="blood" name="blood" required style="text-transform: uppercase;"><br><br>
          
            <label for="district">District</label>
            <input type="text" id="district" name="district" required style="text-transform: uppercase;"><br><br>
          
            <label for="city">city</label>
            <input type="text" id="city" name="city" required style="text-transform: uppercase;"><br><br>
          
            <label for="mob">Mobile</label>
            <input type="number" id="mob" name="mob" required><br><br>
          
            <label for="aval">Available</label>
<select name="available" id="aval" style="text-transform: uppercase;">
  <option value="Anytime">ANY TIME</option>
  <option value="Certaintime">Alternate</option>

</select><br><br>
<span>
<?php
include 'database.php';
?><br><br>
</span>

          
           <button type="submit">submit</button>
        </form>
        
    


    </div>
            </div>
        </div>
    </div>

   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
