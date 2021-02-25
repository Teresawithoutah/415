<html>
<head>
  <title>Isopod Galore Entry Results</title>
</head>
<body>
<h1>Isopod Galore Entry Results</h1>

<?php

$UserUsername = $_POST['UserUsername'];
$UserEmail = $_POST['UserEmail'];
$UserPw = $_POST['UserPw'];



if (!$UserUsername || !$UserEmail || !$UserPw) {
   echo "You have not entered all the required details.<br />"
        ."Please go back and try again.";
   exit;
}

  if (!get_magic_quotes_gpc()) {
    $UserUsername = addslashes($UserUsername);
    $UserEmail = addslashes($UserEmail);
    $UserPw = addslashes($UserPw);
   
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


$sql = "select * from users where UserUsername='".$UserUsername."'";
$result = $conn->query($sql);

if (!$result) {
    echo ('Could not execute query');
  }

  if ($result->num_rows>0) {
    throw new Exception('That username is taken - go back and choose another one.');
  }
// IF USERNAME DOESNOT EXIST ALREADY
$sql = "insert into users (UserUsername,UserEmail,UserPw) values ('".$UserUsername."', '".$UserEmail."', '".$UserPw."')";
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