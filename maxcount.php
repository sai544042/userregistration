 <?php
 $array = array('apple bb','cc apple','d','ccc ab','apple ccccc','cc cccc');
 $token_array = array();
 foreach($array as $item)
   {
        $token_array[] = explode(" ",$item);
   }
print_r($token_array);
   $array_by_frequency = array_count_values($token_array);
   $element = $array_by_frequency[0];

   echo $element;
   ?>