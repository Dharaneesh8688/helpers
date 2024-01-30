<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>HELPERS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      
     
      body{
        background-color:gray;
        color:white;

      }
  table,th,tr,td {
    border:2px solid white;
    padding:2px;
  
  }
  #button:hover{
background-color:green;
color:white;

box-shadow:10px 13px 9px black;

  }
  .forma{
    background-color:white;
    color:black;
    margin-top:60px;
    padding:4px 8px 8px 8px ;
    border-radius:8px;
    box-shadow:14px 6px 8px black;
    
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
      <ul class="navbar-nav me-auto mb-2  mb-lg-0 " >
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.php">Register</a>
        </li>
        <li class="nav-item">
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
  <div class="row ">
    <div class="col-md-4">
      
    </div>
    <div class="col-md-4 justify-content-center ">
      <div class="forma">

     
    <form method="post" action="index.php" style="text-align:justify;">
    <h3 style="text-align:center;padding-top:2px;">SEARCH</h3>
  <label for="city">City:</label>
  <input type="text" id="city" name="city" style="text-transform: uppercase;"><br><br>
  <label for="district">DISTRICT:</label>
  <input type="text" id="district" name="district" style="text-transform: uppercase;"><br><br>
  
  <label for="blood">Blood:</label>
  <input type="text" id="blood" name="blood" style="text-transform: uppercase;"><br><br>
  <input id="button" style="border-radius:9px;"  type="submit" value="Search">
</form>
</div>
  </div>
<div class="col-md-6 text-center mt-5 ">
<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$city = $_POST["city"];
$blood = $_POST["blood"];
$dis = $_POST["district"];



$sql = "SELECT * FROM reg_form WHERE  DISTRICT = '$dis' AND CITY = '$city' AND  BLOOD = '$blood' ";
$result = mysqli_query($conn, $sql);
if (!$result) {
  die("Query failed: " . mysqli_error($conn));
}
?>
<?php
if (mysqli_num_rows($result) > 0) { ?>
  <table class="mx-3">
  <tr><th>NAME</th><th>AVAILABLE</th><th>BLOOD</th><th>MOBILE</th></tr>
  <?php while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
    <td><?php echo $row["NAME"]; ?></td>
    <td><?php echo $row["AVAILABLE"]; ?></td>
    <td><?php echo $row["BLOOD"]; ?></td>
    <td><?php echo $row["mobile_no"]; ?></td>
    </tr>
    <?php
  }?>
  </table>
  <?php
} else {
  echo "No results found";
}
?>
</div>
</div>
</div>
<?php
mysqli_close($conn);
}
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>



