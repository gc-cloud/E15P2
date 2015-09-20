# CSCI-E15: Project 2
### PHP Basics
This project creates a strong password in the xkcd style.  This is, a password that
is easy for humans but hard for computers.  The basic idea is to select large passwords
composed of words, numbers and symbols, that humans can memorize but are difficult to be
cracked using a brut force attack.    

### Repository Location
[GitHub gc-cloud E15](https://github.com/gc-cloud/E15P2)

### Live Site Location
Please visit [p2.zudbu.com](http://p2.zudbu.com).  This domain is dedicated (currently) to my CSCIE15 work.

### Site organization
I decided to take on some of the extra challenges and am using a combination of PHP includes,
and implemented styling using bootstrap. From a PHP standpoint, the solution uses several
includes.  One for the data structures (lists of words, special characters, etc), and
one for the functions.  We take advantage of the predefined PHP libraries to handle arrays.
For example array_rand() and shuffle().  
  - The main content is on index.php.  Head, Header and Footer content is obtained from calls to
   head.php, header.php and footer.php
  - The layout is mobile-first and responsive. To do this, I am using  [bootstrap](http://getbootstrap.com).
  Specific CSS for this site are defined on zudbu.css
  - We are obtaining the Raleway font from [Google fonts](https://www.google.com/fonts)

### Random Password Generation
All the logic to generate random passwords runs on the server side.  Functions are in
generatePassword.php.
-  function addElements ($source, &$destination,$count, $camelCase) selects random
elements from an array ($source) and adds them to a destination array ($destination).
$count drives how many elements will be selected. If $camelCase is true we use PHP's
ucfirst() function to capitalize the first letter of each selected word.
- With the appropriate parameters, we run addElements()  multiple times to select
the desired numbers of words,numbers and special characters.
- Once the destination array has all the desired elements, its contents are shuffled
using PHP's shuffle() function.  
- Finally, the function printPassword($an_Array) is used to output the result to
the screen.

## Sources
- All the source data for words, numbers and special characters is kept in pre-defined
arrays included in data.php.  Selection of numbers and special characters was straightforward.
The list of common english words is based on content from gravityMmonkey
[github](https://gist.github.com/gravitymonkey/2406023)
