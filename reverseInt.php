<?php
function reverseInt($num){

  $orig_arr = str_split($num);

  $reverse_arr = [];

  for ($i = sizeof($orig_arr) - 1; $i >= 0; $i--){
    if ($orig_arr[0] == "-"){
      $reverse_arr[0] = "-";
    }
      $reverse_arr[] = $orig_arr[$i];
  }

  return (int)$reverse = implode("",$reverse_arr);
}
