

<?php
/* Include data structures. These data structures define valid values
for special characters, numbers and words to be used for password generation.
The include call assummes that data structures are on the same folder as this
file  */
include("data.php");

/* Initialize password array.  This array will hold the values selected for special
characters, numbers and words*/
$password = array();

/* Define a function to set the value of $variable to that of the
$_POST[$variable] to a default if $_POST[$variable] is empty.  This function is
meant to be used to support sticky forms that keep the values selected by the user */

/* If set, get user defined values for number of words, numbers and
special characters, otherwise set defaults.*/
isset($_POST['wordCount'])? $wordCount = $_POST['wordCount']:$wordCount= 4;
isset($_POST['numberCount'])? $numberCount = $_POST['numberCount']:$numberCount= 1;
isset($_POST['specialCharacterCount'])? $specialCharacterCount = $_POST['specialCharacterCount']:$specialCharacterCount= 1;
isset($_POST['uppercase'])? $uppercase = $_POST['uppercase']:$uppercase= false;
echo $uppercase;

/* Create a generic function to select random elements form a source
(for example: specialCharacters,numbers,wordCorpus) and then add the
elements to a destination (arguably the password array). If $uppercase is true then
elements start with an uppercase.  Finnaly, this function handles
the special cases of 1 element (not an array) and 0 elements (ignore)*/

function addElements ($source, &$destination,$count, $upperCase){
    $randomKeys  = array_rand($source, $count);
    if (count($randomKeys) == 1){
      /* If only one element, array_rand returns an integer, not an array */
      ($upperCase)? $destination[] = ucfirst($source[$randomKeys]) : $destination[] = $source[$randomKeys];
    } elseif (count($randomKeys) == 0){
      /* If no elements, we do nothing */
    } else {
      /* If elements <> 0,1 then we have an array of results */
      foreach ($randomKeys as $randomKey) {
          ($upperCase)?  $destination[] = ucfirst($source[$randomKey]) :$destination[] = $source[$randomKey];
       }
    }
}

/* Call the addElements function to select words, numbers and special characters */
addElements ($wordCorpus, $password,$wordCount, $uppercase);
addElements ($numbers, $password,$numberCount, $uppercase);
addElements ($specialCharacters, $password,$specialCharacterCount, $uppercase);


/* At this point, the $password array has a list of randomly selected
specialCharacters, numbers and words. However, they are in the order that the
elements were selected.  We use the shuffle function to scramble the elements*/
  shuffle($password);

/* This function outputs the proposed password to the terminal. It is designed to
be called by the form using it */
  function printPassword($an_Array){
      foreach ($an_Array as $key=>$value){
        echo $value ;
      }
  }
?>
