

<?php
/* Define data structures */
  $specialCharacters = array("!","@","#","$","%","&","*","_","+",".");
  $numbers = array("0","1","2","3","4","5","6","7","8","9");
  $wordCorpus = array("hello", "world", "this", "is", "random","stuff");

  /* Return the lengths of each array and the valid values*/
/*  echo "Valid special Characters are " . count($specialCharacters). "<br>";
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
*/

/*Define password array*/
$password = array();

/*  Return arrays of random elements for special characters, numbers and words*/
  $randomKeys  = array_rand($specialCharacters,3);
  foreach ($randomKeys as $randomKey) {
    echo $specialCharacters[$randomKey] ;
    $password[] = $specialCharacters[$randomKey];
  }

  $randomKeys  = array_rand($numbers,3);
  foreach ($randomKeys as $randomKey) {
    echo $numbers[$randomKey] ;
    $password[] = $numbers[$randomKey];
  }

  $randomKeys  = array_rand($wordCorpus,3);
  foreach ($randomKeys as $randomKey) {
    echo $wordCorpus[$randomKey];
    $password[] = $wordCorpus[$randomKey];
  }

  /*  Return password array, scrambled*/
    echo "<br>";
    shuffle($password);
    foreach ($password as $key=>$value) {
      echo $value ;
    }
?>
