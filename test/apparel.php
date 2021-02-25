<?php 
session_start();

//&& $_SESSION['UserUsername'])
if (isset($_SESSION['UserUsername'])) {
   echo file_get_contents("/home/millet19/data/isopod/apparel.php");
}else{
    echo 'You are not logged in.<br />';
}
?>