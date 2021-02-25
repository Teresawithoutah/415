<html>
<head>
  <title>Isopod Galore Entry Results</title>
</head>
<body>
<h1>Isopod Galore Entry Results</h1>
<?php




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


$sql = "UPDATE productinfo
        SET quantity = quantity - 1";
$result = $conn->query($sql);

if ($result) {
    echo  $conn->affected_rows." product was deleted from inventory.";
} else {
    echo "An error has occurred.  The item was not deleted.";
}




$conn->close();
?>


</body>
</html>
