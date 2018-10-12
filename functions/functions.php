<?php
function filtration($input_text){
	$input_text = trim($input_text);
	$input_text = strip_tags($input_text);
	$input_text = htmlspecialchars($input_text);
	return $input_text;
	}
	
$mysqli = false;
function connectDB(){
	global $mysqli;
	$mysqli = new mysqli("localhost", "root", "", "testing");
	$mysqli->query("SET NAMES 'utf8'"); 
}

function getAllTests(){
	global $mysqli;
	connectDB();
	$result_set = $mysqli->query("SELECT * FROM `testall`");
	closeDB();
	return resultSetToArray($result_set);
}

function addAllTests($b){
	global $mysqli;
	connectDB();
	$mysqli->query("INSERT INTO `testall` 
	(`0`, `1`, `2`, `3`, `4`)
	VALUE ('$b[0]', '$b[1]', '$b[2]', '$b[3]', '$b[4]')");
	closeDB();
}

function checkUser($login){
	global $mysqli;
	connectDB();
	$result_set = $mysqli->query("SELECT `login` FROM `result` WHERE `login`='$login'");
	closeDB();
	if ($result_set->fetch_assoc()) return true;
	else return false;
}

function getPage($login){
	global $mysqli;
	connectDB();
	$result_set = $mysqli->query("SELECT * FROM `result` WHERE `login`='$login'");
	closeDB();
	return $result_set->fetch_assoc();
}


function resultSetToArray($result_set){
	$array = array();
	while (($row = $result_set->fetch_assoc()) != false)
		$array[] = $row;
	return $array;
}

function addResult($username, $login, $res, $page, $evaluation, $date){
	global $mysqli;
	connectDB();
	//$success = 
	$mysqli->query("INSERT INTO `result` 
	(`username`, `login`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`,
						  `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`,
						  `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`,
	 `page`, `res`, `date`)
	VALUE ('$username', '$login', '$res[0]', '$res[1]', '$res[2]', '$res[3]', '$res[4]', '$res[5]', '$res[6]', '$res[7]', '$res[8]', '$res[9]',
								  '$res[10]', '$res[11]', '$res[12]', '$res[13]', '$res[14]', '$res[15]', '$res[16]', '$res[17]', '$res[18]', '$res[19]',
								  '$res[20]', '$res[21]', '$res[22]', '$res[23]', '$res[24]', '$res[25]', '$res[26]', '$res[27]', '$res[28]', '$res[29]',
			'$page', '$evaluation', '$date')");
	closeDB();
	//return $success;
}

function closeDB(){
	global $mysqli;
	$mysqli->close();
}
?>
