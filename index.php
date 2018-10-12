<?php 
require_once('./functions/functions.php'); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Головна</title>
	<link href="./css/main.css" rel="stylesheet">
</head>

<body>
	<div class="content_reg">
		<h2 align="center">Введіть реєстраційні дані</h2>
		<div class="auth">			
			<form method="POST" action="">
				<div class="field">
					<label for="surename">Введіть прізвище:</label>
					<input type="text" size="20" id="surename" name="surename">
					<?php
					if (empty($_POST['surename']) && !empty($_POST['click'])){echo "<br>Введіть своє прізвище";}
					elseif (!empty($_POST['surename']) && strlen($_POST['surename'])<=2){echo "<br>Прізвище коротке";}
					elseif (!empty($_POST['surename']) && !empty($_POST['click'])){filtration($_POST['surename']); $surename = true;}
					?>
				</div>
				
				<div class="field">
					<label for="name">Введіть ім&#39;я:</label>
					<input type="text" size="20" id="name" name="name">
					<?php
					if (empty($_POST['name']) && !empty($_POST['click'])){echo "<br>Введіть своє ім'я";}
					elseif (!empty($_POST['name']) && strlen($_POST['name'])<=2){echo "<br>Ім'я коротке";}
					elseif (!empty($_POST['name']) && !empty($_POST['click'])){filtration($_POST['name']); $name = true;}
					?>
				</div>
				
				<div class="field">
					<label for="login">Введіть логін:</label>
					<input type="text" size="20" id="login" name="login">
					<?php
					if (empty($_POST['login']) && !empty($_POST['click'])){echo "<br>Введіть свій логiн";}
					elseif (!empty($_POST['login']) && strlen($_POST['login'])!=4){echo "<br>Логін повинен бути 4 символи";}
					elseif (!empty($_POST['login']) && !empty($_POST['click'])){filtration($_POST['login']); $login = true;}
					?>
				</div>
				<p align="center">
					<input type="submit" value="Перейти до тесту" name="click">
				</p>
			</form>
			<?php 				
				if (isset($surename) && isset($name) && isset($login)){
					session_start();
					$_SESSION["name"] = $_POST["name"];
					$_SESSION["surename"] = $_POST["surename"];
					$_SESSION["login"] = $_POST["login"];
					header('Location:test.php');
					exit;
			}
			?>
		</div>
	</div>

</body>

</html>
