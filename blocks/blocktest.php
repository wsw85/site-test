<tr>
	<td rowspan=5 class="number">Запитання <br>№<?php echo $i+1; ?></td>	
	<td class="question"><?php echo $testAll[$indexTest[$i][0]][0]; ?></td>
</tr>
<tr>
	<td class="answer">
		<input type="radio" name="resTest[<?php echo $indexTest[$i][0] ?>]" value="<?php echo $indexTest[$i][1] ?>">
		<?php echo $testAll[$indexTest[$i][0]][$indexTest[$i][1]]; ?>
	</td>
</tr>
<tr>
	<td class="answer">
		<input type="radio" name="resTest[<?php echo $indexTest[$i][0] ?>]" value="<?php echo $indexTest[$i][2] ?>">
		<?php echo $testAll[$indexTest[$i][0]][$indexTest[$i][2]]; ?></td>
</tr>
<tr>
	<td class="answer">
		<input type="radio" name="resTest[<?php echo $indexTest[$i][0] ?>]" value="<?php echo $indexTest[$i][3] ?>">
		<?php echo $testAll[$indexTest[$i][0]][$indexTest[$i][3]]; ?></td>
</tr>
<tr>
	<td class="answer">
		<input type="radio" name="resTest[<?php echo $indexTest[$i][0] ?>]" value="<?php echo $indexTest[$i][4] ?>">
		<?php echo $testAll[$indexTest[$i][0]][$indexTest[$i][4]]; ?></td>
</tr>
<tr>
	<td colspan=2>&nbsp;</td>
</tr>
