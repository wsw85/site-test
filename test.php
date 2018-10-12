<?php 
require_once "./functions/functions.php"; 
session_start();
	if (empty($_SESSION)) {
		session_destroy();
		header('Location:index.php');
		exit;}
	else {	
			$login = $_SESSION["login"];
			if (checkUser($login)){
				$rowresult = getPage($login);
				$page = $rowresult["page"];
				session_destroy();
				echo $page;
				}
			else{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Тест</title>
	<link href="./css/testing.css" rel="stylesheet">
</head>

<body>

	<div class="content">
		<form action="result.php" method="post">
		<table>
			<tr>
				<td colspan=2><h2>Тестування проходить: <?php echo $_SESSION["surename"]." ".$_SESSION["name"]." ".$_SESSION["login"]; ?></h2></td>
			</tr>
			<?php require_once "blocks/test.php";?>
			<tr>
				<td colspan=2 align="center">
					<input type="submit" name="click" value="Завершити тест">
				</td>
			</tr>
		</table>
		</form>
	</div>
</body>

</html>
<?php }
		}?>
