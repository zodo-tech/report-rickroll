<?php
$host="localhost"; // Host name - localhost or view in hosting cpanel what they give you
$username="username"; // Mysql username
$password="password"; // Mysql password
$db_name="add.url.ph"; // DataBase name

//define ("SITE_URL","http://add.url.ph"); 
define ("SITE_URL","http://localhost/add.url.ph"); // your website name here 
define ("IP",$_SERVER['REMOTE_ADDR']); 
define ("LANG","en");
define ("SITENAME","Add Your Website!");  // your logo is here
define ("SLOGAN","ADD URL"); 

// Connect to server and select database
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
?>
