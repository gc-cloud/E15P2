

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
to password array.  First we create a generic function to update
a destination (arguably the password array) by picking values from
a source (specialCharacters,numbers,wordCorpus).  Then, we call the
function for each case. Using a function is cleaner and consistent with
DNRY principles*/

function addElements ($source, &$destination, $count){
    $randomKeys  = array_rand($source,$count);
    foreach ($randomKeys as $randomKey) {
      $destination[] = $source[$randomKey];
    }
}

addElements ($specialCharacters, $password,3);
addElements ($numbers, $password,3);
addElements ($wordCorpus, $password,3);

/* At this point, the $password array has a list of randomly selected
specialCharacters, numbers and words. However, they are in order.  We use
the shuffle function to scramble the output and then output to screen*/
    shuffle($password);
    foreach ($password as $key=>$value) {
      echo $value ;
    }
?>
