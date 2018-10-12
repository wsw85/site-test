<?php
/*$uploaddir = 'upload/';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . 
	'test.txt')) {
    print "Файл для тесту створено.";
} else {
    print "Файл не створено!!!";
}

chdir('upload/');
*/
require_once "./functions/functions.php"; 
$filearray = file('tests.txt');

$a = array();
$i = 0;
$j=0; $i=0;
while ($i<=count($filearray)-1)
	{
		if ($filearray[$i]{0}=="?") 
			{
				 $a[$j][0]=trim($filearray[$i+1]); 
				 $a[$j][1]=substr(trim($filearray[$i+2]),1);
				 $a[$j][2]=substr(trim($filearray[$i+3]),1);
				 $a[$j][3]=substr(trim($filearray[$i+4]),1);
				 $a[$j][4]=substr(trim($filearray[$i+5]),1);
				 $j++;
			}
		$i=$i+1;
	}
//var_dump($filearray);
//var_dump($a);
for ($i = 0; $i<=count($a)-1; $i++)
	addAllTests($a[$i]);
/*
$obmin="";
for ($i=0; $i<count($a); $i++)
{ 
 for ($j=1; $j<5; $j++)
  if ($a[$i][$j]{0}=="+") {$obmin=$a[$i][$j]; $a[$i][$j]=$a[$i][1]; $a[$i][1]=$obmin;} 
}

for ($i=0; $i<count($a); $i++)
{ 
 for ($j=0; $j<5; $j++)
{
  if ($a[$i][0]{0}=="?"){$a[$i][0]=trim(substr($a[$i][0],1));}
  if ($a[$i][1]{0}=="+"){$a[$i][1]=trim(substr($a[$i][1],1));}
  if ($a[$i][2]{0}=="-"){$a[$i][2]=trim(substr($a[$i][2],1));}
  if ($a[$i][3]{0}=="-"){$a[$i][3]=trim(substr($a[$i][3],1));}
  if ($a[$i][4]{0}=="-"){$a[$i][4]=trim(substr($a[$i][4],1));}
}

}
chdir('../');

$myfile='testsfile.php';
$m=fopen($myfile,"w");
$s='<?php'."\r\n".'$mass=array('."\r\n";
fwrite($m,$s);
for ($i=0; $i<count($a); $i++){
//$s='array('.'\''.$a[$i][0].'\','.'\''.$a[$i][1].'\','.'\''.$a[$i][2].'\','.'\''.$a[$i][3].'\','.'\''.$a[$i][4].'\''.'),'."\r\n";
$s="array("."\"".$a[$i][0]."\"".",\"".$a[$i][1]."\","."\"".$a[$i][2]."\","."\"".$a[$i][3]."\","."\"".$a[$i][4]."\""."),"."\r\n";
fwrite($m,$s);
}
$s=');'."\r\n".'?>';
fwrite($m,$s);

fclose($m);
*/
?>
