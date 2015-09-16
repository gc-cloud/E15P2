

<?php
/* Include data structures. These data structures define valid values
for special characters, numbers and words to be used for password generation.
The include call assummes that data structures are on the same folder as this
file  */
include("data.php");

/* Initialize password array.  This array will hold the values selected for special
characters, numbers and words*/
$password = array();

/*Get user selected values for number of words, numbers and special characters.
Assummes that the origin form is using the POST method.*/
$wordCount = $_POST['wordCount'];
$numberCount = $_POST['numberCount'];
$specialCharacterCount = (int)$_POST['specialCharacterCount'];

/* Create a generic function to select random elements form a source
(for example: specialCharacters,numbers,wordCorpus) and then add the
elements to a destination (arguably the password array). This function handles
the special cases of 1 element (not an array) and 0 elements (ignore)*/

function addElements ($source, &$destination,$count){
    $randomKeys  = array_rand($source, $count);
    if (count($randomKeys) == 1){
      /* If only one element, array_rand returns an integer, not an array */
       $destination[] = $source[$randomKeys];
    } elseif (count($randomKeys) == 0){
      /* If no elements, we do nothing */
    } else {
      /* If elements <> 0,1 then we have an array of results */
      foreach ($randomKeys as $randomKey) {
           $destination[] = $source[$randomKey];
       }
    }
}

/* Call the addElements function to select words, numbers and special characters */
addElements ($wordCorpus, $password,$wordCount);
addElements ($numbers, $password,$numberCount);
addElements ($specialCharacters, $password,$specialCharacterCount);


/* At this point, the $password array has a list of randomly selected
specialCharacters, numbers and words. However, they are in the order that the
elements were selected.  We use the shuffle function to scramble the elements*/
  echo "Words = $wordCount, Special Characters = $specialCharacterCount, Numbers = $numberCount <br>";
  shuffle($password);

/* This function outputs the proposed password to the terminal. It is designed to
be called by the form using it */
  function printPassword($an_Array){
      foreach ($an_Array as $key=>$value){
        echo $value ;
      }
  }

/*printPassword($password);*/

?>
