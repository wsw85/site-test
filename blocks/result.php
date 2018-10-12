<?php
	$testAll = getAllTests();
	$res = array();
	//$n = count($testAll)-1;
	$indexTest = $_SESSION["indexTest"];
	
		for ($i = 0; $i <= 29; /*$n;*/ $i++){
			require "blockresult.php";
		}
?>
