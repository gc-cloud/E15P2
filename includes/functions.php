

<?php
/* Include data structures. These data structures define valid values
for special characters, numbers and words to be used for password generation.
The include call assummes that data structures are on the same folder as this
file  */
include("data.php");

/* Initialize password array.  This array will hold the values selected for special
characters, numbers and words*/
$password = array();

/* Add random elements for special characters, numbers and words
to password array*/
  $randomKeys  = array_rand($specialCharacters,3);
  foreach ($randomKeys as $randomKey) {
    $password[] = $specialCharacters[$randomKey];
  }

  $randomKeys  = array_rand($numbers,3);
  foreach ($randomKeys as $randomKey) {
    $password[] = $numbers[$randomKey];
  }

  $randomKeys  = array_rand($wordCorpus,3);
  foreach ($randomKeys as $randomKey) {
    $password[] = $wordCorpus[$randomKey];
  }

  /*  Shuffle password array and output to screen*/
    shuffle($password);
    foreach ($password as $key=>$value) {
      echo $value ;
    }
?>
