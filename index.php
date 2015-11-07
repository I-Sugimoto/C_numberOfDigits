<?php
$array = array('123789', '100.5', 'sugimo-');

foreach ($array as $n) 
{
  if (ctype_digit($n)) 
    {   
    	//10進数の場合。
  		echo "この10進数の桁数は" . mb_strlen($n) . "桁です。" . "<br>";
  	}
  else
    {   //10進数では無い場合。
        echo "これは10進数ではありません。" . "<br>";
    }	
}

