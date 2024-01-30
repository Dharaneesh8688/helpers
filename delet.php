<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HELPERS|DELETE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <style>
    body{
      background-color:gray;
      color:white;
    }
    input{
    border-radius:50px;
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
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.php">Register</a>
        </li>
        <li class="nav-item pl-4">
          <a class="nav-link" href="delet.php">Delete Doner</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> About</a>
        </li>
     

      </ul>
     
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto justify-content-center">
    <form method="post" action="delet.php" style="margin-top: 350px;text-align:justify;" >
  <label for="NAME">NAME:</label>
  <input type="text" id="NAME" name="NAME" REQUIRED><br><br>
  <label for="DOB">DOB:</label>
  <input type="date" id="DOB" name="DOB" REQUIRED><br><br>
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $NAME = $_POST["NAME"];
  $DOB = $_POST["DOB"];

  include 'connection.php';

  
  $check_query = "SELECT * FROM reg_form WHERE NAME ='$NAME' AND DOB = '$DOB'";
  $result = $conn->query($check_query);

?>
<span>
<?php
  if ($result->num_rows > 0) {
      
      $delete_query = "DELETE FROM reg_form WHERE NAME ='$NAME' AND DOB = '$DOB'";
      if ($conn->query($delete_query) === TRUE) {
          echo "Donor removed successfully";
      } else {
          echo "Error deleting record: " . $conn->error;
      }
  }
  else{
      echo "User not found ";
  }
  ?>
  </span>
  <?php
  mysqli_close($conn);
}
?><br>
  <input style="margin-left:60px;" type="submit" value="REMOVE">
</form>
    </div>
  </div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>


