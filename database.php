
<?php
include'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NAME = $_POST["NAME"];
    $dob = $_POST["DOB"];
    $blood= $_POST["blood"];
    $dist= $_POST["district"];
    $city= $_POST["city"];
    $aval= $_POST["available"];
    $mobile= $_POST["mob"];
    

    // Save data to the database 
 
    $sql = "INSERT INTO reg_form (`NAME`,`DOB`,`BLOOD`,`DISTRICT`,`CITY`,`AVAILABLE`,`mobile_no`) VALUES ('".$NAME."', '".$dob."', '".$blood."','".$dist."','".$city."','".$aval."','".$mobile."')";

    if ($conn->query($sql) === TRUE) {
        echo "Registation sucessfull";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

 
     $conn->close();
}
?>
