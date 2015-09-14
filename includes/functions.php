<?php
  $result = 5+5;
  $number = 6;

  function square(){
    $result = 5*5;
    echo "local square result = $result<br>";
  }

  function squareN($number){
    $result = $number*$number;
    echo "$number Squared = $result<br>";
  }

  function cube (){
    $result = 5*5*5;
    echo "Local cube result = $result<br>";
  }

  function cubeN ($number){
      $result = $number*$number*$number;
      echo "$number cubed = $result<br>";
  }
?>
