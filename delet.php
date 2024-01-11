<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HELPERS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.php">register</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            more
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">delet doner</a></li>
            <li><a class="dropdown-item" href="#">about</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">search</a></li>
          </ul>
        </li>
       
      </ul>
     
    </div>
  </div>
</nav>
<form method="post" action="delet.php">
  <label for="NAME">NAME:</label>
  <input type="text" id="NAME" name="NAME">
  <label for="DOB">DOB:</label>
  <input type="date" id="DOB" name="DOB">
  <input type="submit" value="REMOVE">
</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$NAME= $_POST["NAME"];
$DOB = $_POST["DOB"];

include 'connection.php';

// SQL query
$sql = "DELETE FROM reg_form WHERE NAME ='$NAME' AND DOB = '$DOB'";
if ($conn->query($sql) === TRUE) {
    
    echo "Acount removed  sucessfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
}
?>
