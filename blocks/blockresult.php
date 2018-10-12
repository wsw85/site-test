<tr>
	<td rowspan=5 class="number">Запитання <br>№<?php echo $i+1;?></td>	
	<td class="question"><?php echo $testAll[$indexTest[$i][0]][0]; ?></td>
</tr>

<?php

for ($j = 1; $j<=4; $j++){
$check = "";
if (!isset($resTest[$indexTest[$i][0]]) && $indexTest[$i][$j] == 1) {$classV = "green"; $res[$i] = "-";}
	elseif (isset($resTest[$indexTest[$i][0]]) && $indexTest[$i][$j] == $resTest[$indexTest[$i][0]] && $resTest[$indexTest[$i][0]] == 1)
		{$classV = "green"; $check = "checked"; $res[$i] = "+";}
	elseif (isset($resTest[$indexTest[$i][0]]) && $indexTest[$i][$j] == $resTest[$indexTest[$i][0]] && $resTest[$indexTest[$i][0]] != 1)
		{$classV = "red"; $check = "checked"; $res[$i] = "-";}
	else {$classV = "answer";}
?>
<tr>
	<td class="<?php echo $classV;?>">
		<input type="radio" name="resTest[<?php echo $indexTest[$i][0]; ?>]" value="<?php echo $indexTest[$i][$j]; ?>" <?php echo $check;?> disabled>
		<?php echo $testAll[$indexTest[$i][0]][$indexTest[$i][$j]]; ?>
	</td>
</tr>

<?php }?>
<tr>
	<td colspan=2>&nbsp;</td>
</tr>
