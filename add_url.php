<?php
// if u want to have captcha, then remove this comment:) and leave the code:)
/*
session_start();
if(isset($_GET["captcha"])&&$_GET["captcha"]!=""&&$_SESSION["code"]==$_GET["captcha"])
{
echo "";
//Do you stuff
}
else
{
die("Wrong captcha code entered! Please, enter the code. It's simple:) The captcha is not with auto refreshing, so just click Back button :) and the digits will be the same:)");
}
*/
?>

<?php
include 'header.php';

$detail=addslashes($_GET['url']);
$datetime=date("d/m/y G:i:s"); 

if(empty($detail))
    {
    echo '<font color="red">'.EMPTYFIELD.'</font><br /><br />';
    }
	else    
    {
$sql="INSERT INTO links( detail, datetime)VALUES('$detail', '$datetime')";

$dupe = mysql_query("SELECT * FROM links WHERE detail='$detail'") or die (mysql_error());
$num_rows = mysql_num_rows($dupe);
if ($num_rows > 0) {
echo '<font color="red">ERROR! URL is already present in our database! Add other...</font><br /><br />';
echo "<a href=\"search.php?key=".$detail."\">View URL</a>";
}
else
{

$result=mysql_query($sql);
$id = mysql_insert_id(); 
if($result){
echo "".URLADD."<br />";
echo "<br />".THANX."";
echo "<br />";
echo "<br />";
echo "<a href='".$id."'>".SEEYOURURL."</a>";

}

}

} 
?>

<?php
include 'footer.php';
?>
