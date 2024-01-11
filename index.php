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
            <li><a class="dropdown-item" href="delet.php">delet doner</a></li>
            <li><a class="dropdown-item" href="#">about</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">search</a></li>
          </ul>
        </li>
       
      </ul>
     
    </div>
  </div>
</nav>

<form method="post" action="index.php">
  <label for="city">City:</label>
  <input type="text" id="city" name="city">
  <label for="blood">Blood:</label>
  <input type="text" id="blood" name="blood">
  <input type="submit" value="Search">
</form>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$city = $_POST["city"];
$blood = $_POST["blood"];


// SQL query
$sql = "SELECT * FROM reg_form WHERE CITY = '$city' AND BLOOD = '$blood'";
$result = mysqli_query($conn, $sql);
if (!$result) {
  die("Query failed: " . mysqli_error($conn));
}

// Data display
if (mysqli_num_rows($result) > 0) {
  echo "<table>";
  echo "<tr><th>NAME</th><th>DOB</th><th>BLOOD</th><th>MOBILE</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["NAME"] . "</td>";
    echo "<td>" . $row["DOB"] . "</td>";
    echo "<td>" . $row["BLOOD"] . "</td>";
    echo "<td>" . $row["mobile_no"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No results found";
}

// Database connection close
mysqli_close($conn);
}
?>
