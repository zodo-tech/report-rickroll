<?php
include '../inc/config.php';
include'../inc/lang/lang_'.LANG.'.php'; 

if (isset($_POST['connection'])== 'Connection') {
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

		$sql = 'SELECT count(*) FROM admin WHERE login="'.mysql_escape_string($_POST['login']).'" AND pass_md5="'.md5(mysql_escape_string($_POST['pass'])).'"';
		$req = mysql_query($sql) or die('Error SQL !<br />'.$sql.'<br />'.mysql_error());
		$data = mysql_fetch_array($req);

		mysql_free_result($req);
		mysql_close();

		if ($data[0] == 1) {
			session_start();
			$_SESSION['login'] = $_POST['login'];
			header('Location: admin.php');
			exit();
		}
		
		elseif ($data[0] == 0) {
			$erreur = 'Get the fuck outta here! dumb noOb';
		}

		else {
			$erreur = 'Problem in DB';
		}
	}
	else {
		$erreur = '_|_ Go fuck yourself _|_';
	}
}
?>
<html>
<head>
<title>.::Admin Zone::.</title>
</head>

<body>
<table width="100%">
	<tr>
		<td align="center">
<b><?php echo ADMIN; ?></b>
		</td>
	</tr>
</table>	
<br />
<table width="50%" align="center">
<form action="index.php" method="post">
	<tr>
		<td><?php echo NICKNAME; ?></td><td><input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"></td>
	</tr>
	<tr>
		<td><?php echo PASS; ?></td><td><input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"></td>
	</tr>
</table>
<table width="100%">	
	<tr>
		<td align="center"><input type="submit" name="connection" value="<?php echo SUBMIT; ?>"></td>
	</tr>
</form>
</table>
<br />
<center>
<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
</center>
<?php
include 'footer.php';
?>
</body>
</html>
