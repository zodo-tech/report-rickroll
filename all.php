<?php include 'header.php';?>
<?php echo URLIST; ?>
<br />
<table width="100%">
<br />
<?php 
/*
function clean_url($rows){
	//return str_replace(array('http://','https://','www.'),'',$rows);
	return str_replace(array('http://','https://'),'',$rows);
}

$sql = 'SELECT * FROM links ORDER BY id DESC';
$result=mysql_query($sql);

while ($link=mysql_fetch_array($result)){
echo '<tr>
<td><a href="http://'.htmlspecialchars(clean_url($link['detail'])).'" target="_blank">'.$link['detail'].'</a></td>
      </tr>';
}
*/
?>
</table>


<?php
$sql = 'SELECT * FROM links ORDER BY id DESC';
$result=mysql_query($sql);

while($rows=mysql_fetch_array($result)){
?>
<?php
if ($rows)
{

?>
<a href="<?php echo $rows['id']; ?>"><?php echo htmlspecialchars($rows['detail']); ?></a> - 
<small><?php echo $rows['view']; ?> <?php echo VIEWS; ?></small><br>
<?php
}
else
{
?>

<?php
}
}
?>


<?php
include 'footer.php';
?>
