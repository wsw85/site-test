<?php 
require_once "./functions/functions.php"; 
session_start();
	$resTest = $_POST["resTest"];
	$kp = 0;
	
	foreach ($resTest as $key => $value){
		if (isset($_POST["click"]) && $value == 1) {$kp++;}
		}

	$evaluation = round(($kp*12)/30);
ob_start();	
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Результат</title>
	<link href="./css/result.css" rel="stylesheet">
</head>

<body>

	<div class="content">
		<form>
		<table>
			<tr>
				<td colspan=2>
					<h3>Тестування завершено.</h3>
					<h3>Студент(ка):<?php echo $_SESSION["surename"]." ".$_SESSION["name"];?></h3>
					<h3>Результат: <?php echo $evaluation;?></h3>
					</h3>
				</td>
			</tr>
			<?php require_once "blocks/result.php";?>
			<tr>
				<td colspan=2 align="center">
					<?php echo date("d/m/Y"." | "."H:i:s"); ?>
				</td>
			</tr>
		</table>
		</form>
	</div>
</body>

</html>
<?php
	$page = ob_get_contents();
	ob_end_clean();
	$username = $_SESSION["surename"]." ".$_SESSION["name"];
	$login = $_SESSION["login"];
	$date = date("d/m/Y"." | "."H:i:s");
	session_destroy();

	//$success = 
	addResult($username, $login, $res, $page, $evaluation, $date);	
	echo $page;
?>
