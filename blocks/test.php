<?php
	$testAll = getAllTests();
	$n = count($testAll)-1;
	$numberTest = range(0, $n);
	shuffle($numberTest);
		for ($i = 0; $i <= 29; $i++){
			$answerTest = [1, 2, 3, 4];
			shuffle($answerTest);

			$indexTest[$i][0] = $numberTest[$i];
			$indexTest[$i][1] = $answerTest[0];
			$indexTest[$i][2] = $answerTest[1];
			$indexTest[$i][3] = $answerTest[2];
			$indexTest[$i][4] = $answerTest[3];
			
			require "blocktest.php";
		}
	$_SESSION["indexTest"] = $indexTest;	
?>
