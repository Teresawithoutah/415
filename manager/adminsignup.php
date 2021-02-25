<html>
<head>
  <title>Isopod Galore Entry Results</title>
</head>
<body>
<h1>Isopod Galore Entry Results</h1>

<?php

$EmployeeUsername = $_POST['EmployeeUsername'];
$EmployeeEmail = $_POST['EmployeeEmail'];
$EmployeePw = $_POST['EmployeePw'];



if (!$EmployeeUsername || !$EmployeeEmail || !$EmployeePw) {
   echo "You have not entered all the required details.<br />"
        ."Please go back and try again.";
   exit;
}

  if (!get_magic_quotes_gpc()) {
    $EmployeeUsername = addslashes($EmployeeUsername);
    $EmployeeEmail = addslashes($EmployeeEmail);
    $EmployeePw = addslashes($EmployeePw);
   
  }
  
  
$servername = "localhost";
$username = "millet19_admin";
$password = "IsopodAdmin";
$dname = "millet19_Isopod-Ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "select * from employee where EmployeeUsername='".$EmployeeUsername."'";
$result = $conn->query($sql);

if (!$result) {
    echo ('Could not execute query');
  }

  if ($result->num_rows>0) {
    throw new Exception('That username is taken - go back and choose another one.');
  }
// IF USERNAME DOESNOT EXIST ALREADY
$sql = "insert into employee (EmployeeUsername,EmployeeEmail,EmployeePw) values ('".$EmployeeUsername."', '".$EmployeeEmail."', '".$EmployeePw."')";
$result = $conn->query($sql);
       
if ($result) {
    echo  "sucessful registration";
} else {
    echo "An error has occurred.  The account was not registered.";
}
  
  
  $conn->close();
?>
</body>
</html>