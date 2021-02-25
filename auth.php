<?php 
session_start();
?>

<?php
//&& $_SESSION['UserUsername'])
if (isset($_SESSION['UserUsername'])) {
    echo file_get_contents("mainsite.php");
}else{
    echo 'You are not logged in.<br />';
}

?>