<?php
// set file name
$file = "words.txt";
// read file contents into string
$str = file_get_contents($file) or die("Can not read from file");
echo $str ."<br>";
// read file into array
$array = file($file) or die("Can not read from file");
// count lines in the file
echo "Counted " . count($array) ." line(s). <br>";
// count characters with space
$numCharSpace = strlen($str);
echo "Counted " .$numCharSpace. " character(s) with space.<br>";
// count characters without space
 
$newStrs = preg_replace('/\s+/', '', $str);
$numChar = strlen($newStrs);
echo "Counted " .$numChar. " character(s) without space.<br>";
 
//counts words
$numWords = str_word_count($str);
echo "Counted " . $numWords . " word(s).<br>";
?>