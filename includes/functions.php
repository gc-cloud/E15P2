

<?php
/* Define data structures */
  $specialCharacters = array("!","@","#","$","%","&","*","_","+",".");
  $numbers = array("0","1","2","3","4","5","6","7","8","9");
  $wordCorpus = array("hello", "world", "this", "is", "random","stuff");



  /* Return the lengths of each array and the valid values*/
  echo "Valid special Characters are " . count($specialCharacters). "<br>";
  foreach ($specialCharacters as $key => $value) {
    echo "[".$key."]: ". $value . "<br>" ;
  }

  echo "Valid numbers are " . count($numbers). "<br>";
  foreach ($numbers as $key => $value) {
    echo "[".$key."]: ". $value . "<br>" ;
  }

  echo "Valid words are " . count($wordCorpus). "<br>";
  foreach ($wordCorpus as $key => $value) {
    echo "[".$key."]: ". $value . "<br>" ;
  }



/*  Return arrays of random elements for special characters, numbers and words*/
  echo "<br >Random special Characters: <br>";
  $randomKeys  = array_rand($specialCharacters,3);
  foreach ($randomKeys as $randomKey) {
    echo $specialCharacters[$randomKey] .  "<br>" ;
  }

  echo "<br >Random numbers: <br>";
  $randomKeys  = array_rand($numbers,3);
  foreach ($randomKeys as $randomKey) {
    echo $numbers[$randomKey] .  "<br>" ;
  }

  echo "<br >Random words: <br>";
  $randomKeys  = array_rand($wordCorpus,3);
  foreach ($randomKeys as $randomKey) {
    echo $wordCorpus[$randomKey] .  "<br>" ;
  }


?>




<?php

  function squareN($number){
    $result = $number*$number;
    echo "Squared$result";
  }

  function cubeN ($number){
      $result = $number*$number*$number;
      echo "Cubed$result";
  }
?>
