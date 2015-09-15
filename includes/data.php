
<?php
  /* Define data structures. The content of these arrays is used to select
  valid values to generate a password. There is one array for each data type.
  These are: special characters, numbers and words. These data structures are
  accessed by the file functions.php */
  $specialCharacters = array("!","@","#","$","%","&","*","_","+",".");
  $numbers = array("0","1","2","3","4","5","6","7","8","9");
  $wordCorpus = array("hello", "world", "this", "is", "random","stuff");


  /* Return the lengths of each array and the valid values*/

  /* echo "Valid special Characters are " . count($specialCharacters). "<br>";
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

?>
