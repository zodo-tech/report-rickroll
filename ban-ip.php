<?php 
$deny = array(
"41.199.140.206",


);

if (in_array ($_SERVER['REMOTE_ADDR'], $deny)) {
   header("location: http://eti.pw");
   exit();
} 

?>
