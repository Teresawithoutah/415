<html>
<head>
  <title>Isopod Galore Entry Results</title>
</head>
<body>
<h1>Isopod Galore Entry Results</h1>
<?php


$productname = $_POST['productname'];
$productid = $_POST['productid'];
$picture = $_POST['picture'];
$price = $_POST['price'];


if (!$productname || !$productid || !$picture || !$price) {
   echo "You have not entered all the required details.<br />"
        ."Please go back and try again.";
   exit;
}

  if (!get_magic_quotes_gpc()) {
    $productname = addslashes($productname);
    $productid = addslashes($productid);
    $picture = addslashes($picture);
    $price = doubleval($price);
  }

$servername = "localhost";
$username = "millet19_admin";
$password = "IsopodAdmin";
$dname = "millet19_products";

// Create connection
$conn = new mysqli($servername, $username, $password, $dname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "insert into productinfo (productname, productid, picture, price) values
          ('".$productname."', '".$productid."', '".$picture."', '".$price."')";
$result = $conn->query($sql);

if ($result) {
    echo  $conn->affected_rows." product inserted into database.";
} else {
    echo "An error has occurred.  The item was not added.";
}

$conn->close();
?>
</body>
</html>
