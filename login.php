<?php
session_start();
?>


<?php


$UserUsername  = $_POST['UserUsername'];
$UserPw = $_POST['UserPw'];




if (!$UserUsername || !$UserPw ) {
   echo ("You have not entered all the required details.<br />"
        ."Please go back and try again.");
   exit;
}


  if (!get_magic_quotes_gpc()) {
    $UserUsername = addslashes($UserUsername);
    $UserPw = addslashes($UserPw);
     $EmployeeUsername = addslashes($EmployeeUsername);
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
echo ("Connected successfully");

$sql = "select * 
        from users 
        where UserUsername = '".$UserUsername."' and UserPw = '".$UserPw."'";

$result = $conn->query($sql);



  if ($result->num_rows>0) {
      $_SESSION['UserUsername'] = $UserUsername;
      include("auth.php");
      
     return true;
}
if (!$result) {
    echo('Could not log you in.');
  }


$sql = "select * 
        from employee 
        where EmployeeUsername = '".$UserUsername."' and EmployeePw = '".$UserPw."'";

$result = $conn->query($sql);

if (!$result) {
    echo('Sorry, could not log you in.');
  }

  if ($result->num_rows>0) {
      $_SESSION['EmployeeUsername'] = $EmployeeUsername;
      include("auth.php");
      
     return true;
   
  } else {
     echo ('Could not log you in.');
  }
  
$conn->close();
?>
</body>
</html>
