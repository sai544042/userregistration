<?php
/*$id1 = "words.txt";

$str1 = file_get_contents($id1) or die("Can not read from file");
$a = file($id1) or die("Can not read from file");
//$test = array('chemical' => 1, 'chemical_hazards' => 2); //init
//$test['solution'] = 3;
$test = array('chemical' => 1);
for($i=0;$i<3;$i++){
  $test[$a[$i]];
  $test[$a[$i]]=$test[$a[$i]]+1;}
echo $test['new'];
*/
$id1 = "spell.txt";
$str1 = file_get_contents($id1) or die("Can not read from file");
/*$b = file($id1) or die("Can not read from file");*/
$a = explode(" ",$str1);

$test = array(); //init


//for($i=0;$i<2;$i++){
  /*$test[$a[$i]];*/
  /*$test[$a[$i]]=$test[$a[$i]]+1;}*/
  /*$test[$a[$i]];}*/
  
foreach ($a as $value) {
  //echo $value;
 if (!in_array($value, $test))
  {
  
  $test[$value] = 1;
  }
else
  {
  $test[$value] = $test[$value]+1;
  }
}
$i=0;
foreach ($test as $value){
	echo $value;
	echo "<br>";
	
	
}
?>