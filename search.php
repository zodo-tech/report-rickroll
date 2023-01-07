<?php
include 'header.php';
$key = htmlspecialchars($_GET['key']);
$sql = "SELECT count(*) FROM links WHERE detail Like '%$key%'";

$resultat = mysql_query($sql) or die('Error SQL!<br />'.$sql.'<br />'.mysql_error());

$nb_total = mysql_fetch_array($resultat);

if (($nb_total = $nb_total[0]) == 0) {
echo 'Nothing found about <b>'.$key.'</b><br />';
echo "<br><a href='add?url=$key'>ADD URL $key</a>";
}
else if (($nb_total = $nb_total[0]) == 1){
echo 'about this query: <b>'.$key.'</b>';
}
else{
echo 'about this query: <b>'.$key.'</b>';
}
if (!isset($_GET['next'])) $_GET['next'] = 0;

$nb_affichage_par_page = 20;
$sql="SELECT * FROM links WHERE detail Like '%$key%' LIMIT ".$_GET['next'].",".$nb_affichage_par_page;

$result=mysql_query($sql)or die('Error SQL !'.$sql.'<br>'.mysql_error());
?>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" >
<?php
while($rows=mysql_fetch_array($result)){ 
?>
<tr>
<td bgcolor="#FFFFFF">

<div class="post"><h2><img src="http://images.shrinktheweb.com/xino.php?stwembed=1&stwaccesskeyid=93e93e229a837b8&stwsize=tny&stwurl=<?php echo htmlspecialchars($rows['detail']); ?>" title="<?php echo htmlspecialchars($rows['detail']); ?>"/>
<a href="<?php echo $rows['id']; ?>"><?php echo htmlspecialchars($rows['detail']); ?></a></h2><p class="byline"><small></a>&nbsp;<?php echo POSTBY; ?> <?php echo ON; ?> <?php echo $rows['datetime']; ?></small></p></div><BR></td>
<td valign="top">
<table width="100%">
<tr>
<td width="50" height="50" align="center" valign="middle" style="font-weight: bold; border: 1px solid #000099; background-color: #eee; color :#FFFFFF">
<?php echo $rows['view']; ?><br />
<?php echo VIEWS; ?></td></tr>
<tr>
</tr></table>
</td>
</tr>
<?php
}
?>
<?php

?>
</table>
<table><tr><td align="center"><?php echo '<div class="pagination">
<span class="disabled"><</span>'.navigation($nb_total, $nb_affichage_par_page, $_GET['next'], 10).'</div>';?></td></tr></table>

<?php
include 'footer.php';
?>
